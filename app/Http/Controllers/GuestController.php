<?php
    namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;

class GuestController extends Controller
{
    public function index(){
        return view('guest.index');
    }

    public function redirectToGateway(Request $request)
    {
        //  dd($request->all());
        $request->validate([
            'email' => 'required|email',
        ]);

        $reference = 'TIKVAAH_' . uniqid();
        $amount = 30000 * 100; // in kobo

        // Save payment record
        Payment::create([
            'user_id' => Auth::id(),
            'email' => $request->email,
            'reference' => $reference,
            'amount' => $amount,
            'status' => 'pending',
        ]);

        // Initialize Paystack transaction
        $response = Http::withToken(env('PAYSTACK_SECRET_KEY'))
            ->post('https://api.paystack.co/transaction/initialize', [
                'email' => $request->email,
                'amount' => $amount,
                'reference' => $reference,
                'callback_url' => route('paystack.callback'),
            ]);

        $body = $response->json();

        if (isset($body['status']) && $body['status'] === true) {
            return redirect($body['data']['authorization_url']);
        } else {
            return back()->with('error', 'Unable to initiate payment. Please try again.');
        }
    }

    public function handleGatewayCallback(Request $request)
    {
        $reference = $request->query('reference');

        $response = Http::withToken(env('PAYSTACK_SECRET_KEY'))
            ->get("https://api.paystack.co/transaction/verify/{$reference}");

        $body = $response->json();

        if (!isset($body['status']) || $body['status'] === false) {
            return redirect()->route('guest.dashboard')->with('error', 'Payment verification failed.');
        }

        $data = $body['data'];
        $status = $data['status'];

        $payment = Payment::where('reference', $reference)->first();
        if ($payment) {
            $payment->update([
                'status' => $status,
                'channel' => $data['channel'] ?? null,
                'payment_data' => $data,
            ]);
        }

        if ($status === 'success') {
            return redirect()->route('guest.dashboard')->with('success', 'Payment successful! Welcome to Tikvaah Tech Solutions.');
        }

        return redirect()->route('guest.dashboard')->with('error', 'Payment failed or cancelled.');
    }

}

?>