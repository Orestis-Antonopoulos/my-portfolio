@include('layouts.page2header', ['sectionId'=>'contactsection','title'=>'CONTACT'])

<!-- Email -->
<div class="h-[100px] flex flex-row p-[10px] max-[330px]:p-[4px] shadow-lg rounded-xl bg-[#ffffffaa] dark:bg-[#333333] max-w-[400px] max-[424px]:max-w-[300px] mx-auto mb-[50px] justify-center min-[331px]:justify-between items-center">
    <div class="flex flex-col items-start">
        <p class="ml-[4px] dark:text-[#ccc]">Contact Email:</p>
        <img src="{{ asset('images/contact/email.svg') }}" class="w-[150px] min-[400px]:w-[180px] dark:invert">
    </div>
    <div class="min-[331px]:px-[10px] flex flex-row gap-[4px] min-[331px]:gap-[10px]">
        <button id="sendEmail" onclick="sendEmail()" title="Send Email" class="cursor-pointer buttonhover rounded-lg p-[10px] w-[50px] h-[50px]">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-full clickthrough fill-[#bbb] dark:fill-[#333]" xml:space="preserve"><path d="M467 76H45C20.238 76 0 96.149 0 121v270c0 24.86 20.251 45 45 45h422c24.762 0 45-20.149 45-45V121c0-24.857-20.248-45-45-45zm-6.91 30L267.624 299.094c-5.864 5.882-17.381 5.886-23.248 0L51.91 106h408.18zM30 385.485v-258.97L159.065 256 30 385.485zM51.91 406l128.334-128.752 42.885 43.025c17.574 17.631 48.175 17.624 65.743 0l42.885-43.024L460.09 406H51.91zM482 385.485 352.935 256 482 126.515v258.97z" data-original="#000000"/></svg>
        </button>
        <button id="copyEmail" onclick="copyEmail()" title="Copy Email" class="cursor-pointer buttonhover rounded-lg p-[10px] w-[50px] h-[50px]">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-full clickthrough fill-[#bbb] dark:fill-[#333]" xml:space="preserve"><path d="M271 512H80c-44.113 0-80-35.887-80-80V161c0-44.113 35.887-80 80-80h191c44.113 0 80 35.887 80 80v271c0 44.113-35.887 80-80 80zM80 121c-22.055 0-40 17.945-40 40v271c0 22.055 17.945 40 40 40h191c22.055 0 40-17.945 40-40V161c0-22.055-17.945-40-40-40zm351 261V80c0-44.113-35.887-80-80-80H129c-11.047 0-20 8.953-20 20s8.953 20 20 20h222c22.055 0 40 17.945 40 40v302c0 11.047 8.953 20 20 20s20-8.953 20-20zm0 0" data-original="#000000"/></svg>
        </button>
    </div>
</div>

<!-- Phone number -->
<div class="h-[100px] flex flex-row p-[10px] max-[330px]:p-[4px] shadow-lg rounded-xl bg-[#ffffffaa] dark:bg-[#333333] max-w-[400px] max-[424px]:max-w-[300px] mx-auto mb-[50px] justify-center min-[331px]:justify-between items-center">
    <div class="flex flex-col items-start">
        <p class="ml-[4px] dark:text-[#ccc]">Phone number:</p>
        <img src="{{ asset('images/contact/phone.svg') }}" class="w-[127px] dark:invert">
    </div>
    <div class="min-[331px]:px-[10px] flex flex-row gap-[4px] min-[331px]:gap-[10px]">
        <button id="callPhone" onclick="callPhone()" title="Call Phone Number" class="cursor-pointer buttonhover rounded-lg p-[10px] w-[50px] h-[50px]">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 473.806 473.806" class="w-full clickthrough fill-[#bbb] dark:fill-[#333]" xml:space="preserve"><path d="M374.456 293.506c-9.7-10.1-21.4-15.5-33.8-15.5-12.3 0-24.1 5.3-34.2 15.4l-31.6 31.5c-2.6-1.4-5.2-2.7-7.7-4-3.6-1.8-7-3.5-9.9-5.3-29.6-18.8-56.5-43.3-82.3-75-12.5-15.8-20.9-29.1-27-42.6 8.2-7.5 15.8-15.3 23.2-22.8 2.8-2.8 5.6-5.7 8.4-8.5 21-21 21-48.2 0-69.2l-27.3-27.3c-3.1-3.1-6.3-6.3-9.3-9.5-6-6.2-12.3-12.6-18.8-18.6-9.7-9.6-21.3-14.7-33.5-14.7s-24 5.1-34 14.7l-.2.2-34 34.3c-12.8 12.8-20.1 28.4-21.7 46.5-2.4 29.2 6.2 56.4 12.8 74.2 16.2 43.7 40.4 84.2 76.5 127.6 43.8 52.3 96.5 93.6 156.7 122.7 23 10.9 53.7 23.8 88 26 2.1.1 4.3.2 6.3.2 23.1 0 42.5-8.3 57.7-24.8.1-.2.3-.3.4-.5 5.2-6.3 11.2-12 17.5-18.1 4.3-4.1 8.7-8.4 13-12.9 9.9-10.3 15.1-22.3 15.1-34.6 0-12.4-5.3-24.3-15.4-34.3l-54.9-55.1zm35.8 105.3c-.1 0-.1.1 0 0-3.9 4.2-7.9 8-12.2 12.2-6.5 6.2-13.1 12.7-19.3 20-10.1 10.8-22 15.9-37.6 15.9-1.5 0-3.1 0-4.6-.1-29.7-1.9-57.3-13.5-78-23.4-56.6-27.4-106.3-66.3-147.6-115.6-34.1-41.1-56.9-79.1-72-119.9-9.3-24.9-12.7-44.3-11.2-62.6 1-11.7 5.5-21.4 13.8-29.7l34.1-34.1c4.9-4.6 10.1-7.1 15.2-7.1 6.3 0 11.4 3.8 14.6 7l.3.3c6.1 5.7 11.9 11.6 18 17.9 3.1 3.2 6.3 6.4 9.5 9.7l27.3 27.3c10.6 10.6 10.6 20.4 0 31-2.9 2.9-5.7 5.8-8.6 8.6-8.4 8.6-16.4 16.6-25.1 24.4-.2.2-.4.3-.5.5-8.6 8.6-7 17-5.2 22.7l.3.9c7.1 17.2 17.1 33.4 32.3 52.7l.1.1c27.6 34 56.7 60.5 88.8 80.8 4.1 2.6 8.3 4.7 12.3 6.7 3.6 1.8 7 3.5 9.9 5.3.4.2.8.5 1.2.7 3.4 1.7 6.6 2.5 9.9 2.5 8.3 0 13.5-5.2 15.2-6.9l34.2-34.2c3.4-3.4 8.8-7.5 15.1-7.5 6.2 0 11.3 3.9 14.4 7.3l.2.2 55.1 55.1c10.3 10.2 10.3 20.7.1 31.3zm-154.2-286.1c26.2 4.4 50 16.8 69 35.8s31.3 42.8 35.8 69c1.1 6.6 6.8 11.2 13.3 11.2.8 0 1.5-.1 2.3-.2 7.4-1.2 12.3-8.2 11.1-15.6-5.4-31.7-20.4-60.6-43.3-83.5s-51.8-37.9-83.5-43.3c-7.4-1.2-14.3 3.7-15.6 11s3.5 14.4 10.9 15.6zm217.2 96.3c-8.9-52.2-33.5-99.7-71.3-137.5s-85.3-62.4-137.5-71.3c-7.3-1.3-14.2 3.7-15.5 11-1.2 7.4 3.7 14.3 11.1 15.6 46.6 7.9 89.1 30 122.9 63.7 33.8 33.8 55.8 76.3 63.7 122.9 1.1 6.6 6.8 11.2 13.3 11.2.8 0 1.5-.1 2.3-.2 7.3-1.1 12.3-8.1 11-15.4z" data-original="#000000"/></svg>
        </button>
        <button id="copyPhone" onclick="copyPhone()" title="Copy Phone Number" class="cursor-pointer buttonhover rounded-lg p-[10px] w-[50px] h-[50px]">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-full clickthrough fill-[#bbb] dark:fill-[#333]" xml:space="preserve"><path d="M271 512H80c-44.113 0-80-35.887-80-80V161c0-44.113 35.887-80 80-80h191c44.113 0 80 35.887 80 80v271c0 44.113-35.887 80-80 80zM80 121c-22.055 0-40 17.945-40 40v271c0 22.055 17.945 40 40 40h191c22.055 0 40-17.945 40-40V161c0-22.055-17.945-40-40-40zm351 261V80c0-44.113-35.887-80-80-80H129c-11.047 0-20 8.953-20 20s8.953 20 20 20h222c22.055 0 40 17.945 40 40v302c0 11.047 8.953 20 20 20s20-8.953 20-20zm0 0" data-original="#000000"/></svg>
        </button>
    </div>
</div>

<!-- QR & Social -->
<div class="flex flex-col justify-center items-center min-[425px]:flex-row min-[425px]:justify-between max-w-[400px] mx-auto gap-[50px] min-[425px]:gap-[10px] mb-[50px]">
    <!-- QR code -->
    <a href="{{ asset('files/vcard.vcf') }}">
        <div class="justify-center items-center flex flex-row gap-[10px] max-w-300 min-[425px]:max-w-[180px]">
            <div class="h-[200px] flex flex-row px-[10px] shadow-lg rounded-xl bg-[#ffffffaa] dark:bg-[#333333] w-full">
                <div class="flex flex-col justify-center items-center">
                    <p class="dark:text-[#ccc]">Vcard:</p>
                    <img src="{{ asset('images/contact/vcardQrCode.svg') }}" loading="lazy" class="w-[150px] h-[150px] shrink-0 shadow-lg rounded-xl">
                    <p class="italic text-sm text-[#333] dark:text-[#ccc]">tap to download</p>
                </div>
            </div>
        </div>
    </a>
    
    <!-- Social media -->
    <div class="h-[100px] min-[425px]:h-[200px] max-w-[300px] w-full min-[425px]:w-[170px] flex shadow-lg rounded-xl bg-[#ffffffaa] dark:bg-[#333333] justify-center items-center p-[10px] max-[424px]:mx-auto">
        <div class="flex flex-row min-[425px]:flex-col gap-[10px] min-[425px]:gap-[20px]">
            <div class="flex flex-row gap-[10px] min-[425px]:gap-[20px]">
                <!-- linkedin -->
                <a class="w-[50px] h-[50px] min-[425px]:w-[60px] min-[425px]:h-[60px] p-[10px] bg-[#0A66C2] rounded-xl" href="https://linkedin.com/in/orestis-antonopoulos-51267675/" target="_blank">
                    <svg class="clickthrough" viewBox="-2 -2 24 24" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin" class="jam jam-linkedin"><path fill="#fff" d="M19.959 11.719v7.379h-4.278v-6.885c0-1.73-.619-2.91-2.167-2.91-1.182 0-1.886.796-2.195 1.565-.113.275-.142.658-.142 1.043v7.187h-4.28s.058-11.66 0-12.869h4.28v1.824l-.028.042h.028v-.042c.568-.875 1.583-2.126 3.856-2.126 2.815 0 4.926 1.84 4.926 5.792zM2.421.026C.958.026 0 .986 0 2.249c0 1.235.93 2.224 2.365 2.224h.028c1.493 0 2.42-.989 2.42-2.224C4.787.986 3.887.026 2.422.026zM.254 19.098h4.278V6.229H.254v12.869z"/></svg>
                </a>
                <!-- github -->
                <a class="w-[50px] h-[50px] min-[425px]:w-[60px] min-[425px]:h-[60px] p-[10px] bg-[#000] rounded-xl" href="https://github.com/Orestis-Antonopoulos" target="_blank">
                    <svg class="clickthrough" viewBox="-2.5 0 19 19" xmlns="http://www.w3.org/2000/svg" class="cf-icon-svg"><path fill="#fff" d="M9.464 17.178a4.506 4.506 0 0 1-2.013.317 4.29 4.29 0 0 1-2.007-.317.746.746 0 0 1-.277-.587c0-.22-.008-.798-.012-1.567-2.564.557-3.105-1.236-3.105-1.236a2.44 2.44 0 0 0-1.024-1.348c-.836-.572.063-.56.063-.56a1.937 1.937 0 0 1 1.412.95 1.962 1.962 0 0 0 2.682.765 1.971 1.971 0 0 1 .586-1.233c-2.046-.232-4.198-1.023-4.198-4.554a3.566 3.566 0 0 1 .948-2.474 3.313 3.313 0 0 1 .091-2.438s.773-.248 2.534.945a8.727 8.727 0 0 1 4.615 0c1.76-1.193 2.532-.945 2.532-.945a3.31 3.31 0 0 1 .092 2.438 3.562 3.562 0 0 1 .947 2.474c0 3.54-2.155 4.32-4.208 4.548a2.195 2.195 0 0 1 .625 1.706c0 1.232-.011 2.227-.011 2.529a.694.694 0 0 1-.272.587z"/></svg>
                </a>
            </div>
            <div class="flex flex-row gap-[10px] min-[425px]:gap-[20px]">
                <!-- youtube -->
                <div class="w-[50px] h-[50px] min-[425px]:w-[60px] min-[425px]:h-[60px] p-[10px] bg-[#F24423] rounded-xl relative">
                    <svg class="clickthrough" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill="#fff" d="M4.79 2.093A.5.5 0 0 0 4 2.5v10a.5.5 0 0 0 .79.407l7-5a.5.5 0 0 0 0-.814l-7-5Z"/></svg>
                    <div class="opacity-0 hover:opacity-100 w-[50px] h-[50px] min-[425px]:w-[60px] min-[425px]:h-[60px] bg-[#ffffff60] rounded-xl absolute top-0 left-0 flex justify-center items-center cursor-pointer">
                        <span class="clickthrough font-black text-[#33333390]">Soon</span></div>
                </div>
                <!-- facebook -->
                <a class="w-[50px] h-[50px] min-[425px]:w-[60px] min-[425px]:h-[60px] p-[10px] bg-[#1768FA] rounded-xl" href="https://www.facebook.com/sky.screamer.9" target="_blank">
                    <svg class="clickthrough" viewBox="0 0 24 24" data-name="Flat Color" xmlns="http://www.w3.org/2000/svg" class="icon flat-color"><path fill="#fff" d="M14 6h3a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1h-3a5 5 0 0 0-5 5v3H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2v7a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-7h2.22a1 1 0 0 0 1-.76l.5-2a1 1 0 0 0-1-1.24H13V7a1 1 0 0 1 1-1Z"/></svg>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Contact form -->
<div class="shadow-lg rounded-xl bg-[#ffffff40] dark:bg-[#00000020] p-[10px] flex flex-col items-center justify-center clickthrough relative max-w-[300px] min-[425px]:max-w-[400px] mx-auto">
    <h3 class="text-[#333] dark:text-[#ccc]">Contact Form</h3>

    <form action="" class="flex flex-col gap-[10px] w-full max-w-[300px]">
        <input class="text-[#333] dark:text-[#ccc] bg-[#ffffffaa] dark:bg-[#333333] border border-[#333] h-[30px] rounded-lg" type="text" id="name" name="name" placeholder="Your full name..">
        <input class="text-[#333] dark:text-[#ccc] bg-[#ffffffaa] dark:bg-[#333333] border border-[#333] h-[30px] rounded-lg" type="email" id="email" name="email" placeholder="Your@email.com">
        <input class="text-[#333] dark:text-[#ccc] bg-[#ffffffaa] dark:bg-[#333333] border border-[#333] h-[30px] rounded-lg" type="text" id="subject" name="subject" placeholder="Subject">
        <textarea class="text-[#333] dark:text-[#ccc] bg-[#ffffffaa] dark:bg-[#333333] border border-[#333] h-[200px] rounded-lg" id="Message" name="Message" placeholder="Your message here..."></textarea>

        <input type="submit" value="Submit" class="buttonhover p-[10px] text-[#ccc] dark:text-[#333] text-bold rounded-xl w-[150px] mx-auto">
    </form>
    <img src="{{ asset('images/contact/underconstruction.webp') }}" class="w-[150px] h-[150px] absolute opacity-30">
</div>

@include('layouts.page2footer')