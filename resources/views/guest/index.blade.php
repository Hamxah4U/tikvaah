<x-header>
    <script src="https://js.paystack.co/v1/inline.js"></script>
    <div class="container py-5">

        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="d-flex justify-content-end mb-3">
            <button id="langSwitch" class="btn btn-outline-primary btn-sm">
                <i class="bi bi-translate"></i> <span id="langLabel">Switch to Hausa</span>
            </button>
        </div>

        <div class="card shadow-lg border-0 rounded-4">
            <div class="card-body p-5">
                <h2 class="text-center mb-4 text-primary fw-bold">
                    Tikvaah Tech Solutions
                </h2>
                <h5 class="text-center mb-3 text-secondary" id="titleText">
                    Rules and Regulations Governing the ICT Training Program
                </h5>

                <div id="englishText">
                    <p class="text-muted">
                        Tikvaah Tech Solutions ICT Centre is dedicated to equipping youths and children with relevant ICT
                        skills for the modern digital world. To ensure discipline, effective learning, and progress,
                        the following rules apply to all participants:
                    </p>

                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item">1️⃣ The training program lasts for <strong>one (1) year</strong>.</li>
                        <li class="list-group-item">2️⃣ The <strong>registration fee is ₦30,000 (Thirty Thousand Naira only)</strong>, payable online through Paystack.</li>
                        <li class="list-group-item">3️⃣ All payments are <strong>non-refundable</strong> after registration.</li>
                        <li class="list-group-item">4️⃣ Students must attend classes regularly and be punctual to all sessions.</li>
                        <li class="list-group-item">5️⃣ Seriousness, focus, and good conduct are mandatory throughout the program.</li>
                        <li class="list-group-item">6️⃣ Any trainee who <strong>refuses to concentrate</strong> or shows consistent unseriousness will have their admission suspended and must <strong>renew their registration</strong> to continue.</li>
                        <li class="list-group-item">7️⃣ Use of mobile phones or social media during class hours is strictly prohibited.</li>
                        <li class="list-group-item">8️⃣ Damaging any ICT equipment will require the trainee to pay for repair or replacement.</li>
                        <li class="list-group-item">9️⃣ Good manners, decent dressing, and respect for instructors and peers are required at all times.</li>
                        <li class="list-group-item">🔟 Only trainees who meet attendance and performance standards will receive a <strong>Certificate of Completion</strong>.</li>
                    </ul>

                    <div class="form-check mt-4">
                        <input class="form-check-input" type="checkbox" id="agreeCheckbox">
                        <label class="form-check-label fw-semibold text-dark" for="agreeCheckbox">
                            I have carefully read and agreed to abide by all the Rules and Regulations of Tikvaah Tech Solutions ICT Centre.
                        </label>
                    </div>
                </div>

                <div id="hausaText" style="display:none;">
                    <p class="text-muted">
                        Cibiyar Tikvaah Tech Solutions ICT ta ƙuduri aniyar koyar da matasa da yara dabarun ICT na zamani.
                        Domin tabbatar da ladabi, kulawa, da nasara, waɗannan ƙa’idodi za su jagoranci dukkan ɗalibai:
                    </p>

                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item">1️⃣ Tsawon lokacin shirin karatu shekara <strong>ɗaya (1)</strong> ce.</li>
                        <li class="list-group-item">2️⃣ Kuɗin rajista shine <strong>₦30,000 (Naira dubu talatin)</strong> kuma ana biya ta hanyar <strong>Paystack</strong> a layi.</li>
                        <li class="list-group-item">3️⃣ Duk wani biya ba zai dawo ba bayan an kammala rajista.</li>
                        <li class="list-group-item">4️⃣ Dalibai su kasance masu zuwa aji akai-akai kuma su iso a kan lokaci.</li>
                        <li class="list-group-item">5️⃣ Dole ne a nuna ƙwazo, hankali da kyakkyawar ɗabi’a a duk lokacin shirin.</li>
                        <li class="list-group-item">6️⃣ Duk ɗalibin da <strong>ba ya mai da hankali</strong> ko kuma baya da ƙwazo, za a dakatar da shi kuma sai ya <strong>sake sabunta rajista</strong> idan yana so ya ci gaba.</li>
                        <li class="list-group-item">7️⃣ Amfani da waya ko shafukan sada zumunta yayin darasi ba a yarda da shi ba.</li>
                        <li class="list-group-item">8️⃣ Idan aka lalata kayan aiki, ɗalibi ne zai biya diyya.</li>
                        <li class="list-group-item">9️⃣ A rika sanya kaya masu tsafta da ladabi tare da girmama malamai da abokan karatu.</li>
                        <li class="list-group-item">🔟 Daliban da suka cika ka’idojin halarta da kwarewa za su samu <strong>Takarar Ƙarewa (Certificate of Completion)</strong>.</li>
                    </ul>

                    <div class="form-check mt-4">
                        <input class="form-check-input" type="checkbox" id="agreeCheckboxHausa">
                        <label class="form-check-label fw-semibold text-dark" for="agreeCheckboxHausa">
                            Na karanta kuma na amince da duk ƙa’idodin cibiyar Tikvaah Tech Solutions.
                        </label>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <form action="{{ route('paystack.payment') }}" method="POST">
                        @csrf
                        <input type="email" name="email" value="{{ auth()->user()->email }}" hidden>
                        <button id="payButton" type="submit" class="btn btn-success px-4 py-2 fw-bold" disabled>
                            <i class="bi bi-credit-card"></i> Proceed to Payment (₦30,000)
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const langSwitch = document.getElementById("langSwitch");
            const langLabel = document.getElementById("langLabel");
            const englishText = document.getElementById("englishText");
            const hausaText = document.getElementById("hausaText");
            const payButton = document.getElementById("payButton");

            const engCheckbox = document.getElementById("agreeCheckbox");
            const hausaCheckbox = document.getElementById("agreeCheckboxHausa");

            // Language toggle
            langSwitch.addEventListener("click", function () {
                if (englishText.style.display === "none") {
                    englishText.style.display = "block";
                    hausaText.style.display = "none";
                    langLabel.innerText = "Switch to Hausa";
                } else {
                    englishText.style.display = "none";
                    hausaText.style.display = "block";
                    langLabel.innerText = "Switch to English";
                }
            });

            // Agreement logic
            function updatePayButton() {
                const isChecked = engCheckbox.checked || hausaCheckbox.checked;

                if (isChecked) {
                    payButton.disabled = false; // Enable the button
                } else {
                    payButton.disabled = true; // Disable the button
                }
                // if (engCheckbox.checked || hausaCheckbox.checked) {
                //     payButton.style.display = "inline-block";
                // } else {
                //     payButton.style.display = "none";
                // }
            }

            engCheckbox.addEventListener("change", updatePayButton);
            hausaCheckbox.addEventListener("change", updatePayButton);

            // Redirect to Paystack
            // payButton.addEventListener("click", function () {
            //     //redirect to payment route
            // });
        });
    </script>
</x-header>
