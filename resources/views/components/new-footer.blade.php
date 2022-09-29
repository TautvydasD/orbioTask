<footer
    x-data="{ read: false }"
    class="bg-footer py-6 px-4 md:px-[100px] md:py-8"
>
    <div class="md:hidden text-footer-navigation font-monty leading-[120%]">
        <div>
            <a class="hover:text-mail" href="#">
                Contacts
            </a>
        </div>
        <div class="py-[17px]">
            <a class="hover:text-mail" href="#">
                Privacy policy
            </a>
        </div>
        <div>
            <a class="hover:text-mail" href="#">
                Terms & Conditions
            </a>
        </div>
    </div>
    <p class="text-footer-text pb-8 confidentials lg:pt-[33px] font-sans-pro leading-[150%] lg:leading-[24px] text-[18px] lg:text-[16px]">
        Rebilita, UAB</br>
        Gedimino str. 45-7, LT-44239, Kaunas</br>
        Registration code: 304912714</br>
        support@brainety.com</br>
        +1 (352) 508-4041
    </p>
    <div>
        
    </div>
    {{-- TODO: Line clamp  --}}
    <p
        x-bind:class="read ? '' : 'lg:truncate lg:h-[43px]'"
        class="text-footer-text text-[18px] lg:text-[16px] font-sans-pro leading-[150%] lg:leading-[24px]"
    >
        <b>Disclaimer:</b> The Site cannot and does not contain professional or definitively accurate product/service advice and/or opinions. The product/service information and/or opinions are provided for entertainment and educational purposes only and is not a substitute for professional advice. Accordingly, before taking any actions based upon your scores, we encourage you to consult with the appropriate professionals. We do not provide any kind of professional or definitively accurate product/service advice. THE USE OF RELIANCE OF ANY INFORMATION CONTAINED ON THE SITE IS SOLELY AT YOUR OWN RISK.
    </p>
    <button
        class="md:hidden flex items-center mt-[10px]"
        @click="read = !read"
    >
        <div
            class="text-footer-navigation leading-[120%] mr-[7px] font-monty font-semibold"
            x-text="read ? 'Read less' : 'Read more'"
        >
        </div>
        <img
            x-bind:class="read ? 'rotate-180'  : ''"
            src="arrow.png"
            alt="arrow"
        >
    </button>
    <div class="flex-grow h-px bg-footer-text mt-10 lg:mt-[27px]"></div>
    <div class="flex text-footer-text footer-nav justify-between pt-[19.5px] lg:pt-6 font-semibold">
        <div class="flex nav lg:hidden text-[16px] font-monty">
            <div class="hover:text-mail">
                <a href="#">
                Contacts
                </a>
            </div>
            <div class="pl-8 pr-[33px] hover:text-mail">
                <a href="#">
                Privacy policy
                </a>
            </div>
            <div class="hover:text-mail">
                <a href="#">
                Terms & Conditions
                </a>
            </div>
        </div>
        <div class="text-[18px] font-sans-pro">
          © 2022 Personety.  All rights reserved.
        </div>
    </div>
</footer>
