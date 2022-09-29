<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"/>
        <title>Personety</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body class="antialiased">
      <x-new-nav></x-new-nav>
      <main
        x-data="{
          isChecked: false,
          isInvalid: false,
          toggleAction() {
            if (this.isChecked && this.isInvalid) this.isInvalid = false
            if (this.isChecked) return; // procceeds with actions
            this.isInvalid = true;
            setTimeout(() => {
              this.isInvalid = false
            }, 2000)
          }
        }"
        class="bg-background-page flex flex-col"
      >
        <b class="text-center service-title pt-20 pb-[58px] lg:pt-6 lg:pb-8 text-[45px] lg:text-[32px] font-monty font-bold">
          Revealed – your true <span class="text-primary">Personality</span> type 
        </b>
        <div class="flex justify-center lg:flex-col lg:items-center gap-6 cards font-monty">
          <div class="p-8 border-solid border border-footer-text rounded bg-white w-[392px] hover:border-darkish-blue hover:border-2 hover:p-[31px]">
            <div class="flex justify-between">
              <div>
                <div class="text-[28px] mb-4 text-plan-title text-bold whitespace-nowrap overflow-hidden">
                  3 month plan
                </div>
                <div class="text-plan-info font-medium whitespace-nowrap overflow-hidden">
                  Billed every 3 months
                </div>
              </div>
              <div class="flex flex-col items-end ml-[45px]">
                <div class="text-[14px] line-through text-secondary text-semibold">
                  $9.00
                </div>
                <div class="text-[32px] text-secondary text-bold">
                  $2.25
                </div>
                <div class="text-plan-info whitespace-nowrap overflow-hidden">
                  per week
                </div>
              </div>
            </div>
            <div>
              <button
                class="bg-primary py-[14px] hover:py-[15px] px-[24px] hover:px-[25px] rounded mt-6 flex items-center justify-center text-white w-full hover:shadow-card border-solid border border-footer-text bg-plan-button-background text-plan-button-text hover:text-white hover:bg-primary hover:border-none"
                @click="toggleAction()"  
              >
                <div class="mr-[15px]">
                  Get personality test
                </div>
                {{-- TODO: change this from img to char or html element  --}}
                <img src="arrow-right-grey.png" alt="arrow">
              </button>
            </div>
          </div>
          <div class="lg:order-first p-8 border-solid border-2 border-darkish-blue rounded bg-blank-blue w-[392px] shadow-card relative">
            <div class="absolute right-[5.5rem] bottom-[15.3rem] lg:bottom-[13.4rem]  rounded px-6 py-[10px] bg-plan-label text-[14px] text-white">
              Best value - save 75%!
            </div>
            <div class="flex justify-between">
              <div>
                <div class="text-[28px] mb-4 text-plan-title text-bold whitespace-nowrap overflow-hidden">
                  12 month plan
                </div>
                <div class="text-plan-info font-medium whitespace-nowrap overflow-hidden">
                  Billed every 12 months
                </div>
              </div>
              <div class="flex flex-col items-end ml-[45px]">
                <div class="text-[14px] line-through text-secondary text-semibold">
                  $5.00
                </div>
                <div class="text-[32px] text-secondary text-bold">
                  $1.25
                </div>
                <div class="text-plan-info whitespace-nowrap overflow-hidden">
                  per week
                </div>
              </div>
            </div>
            <div>
              <button
                class="bg-primary py-3.5 px-6 rounded mt-6 flex items-center justify-center text-white w-full shadow-card"
                @click="toggleAction()"  
              >
                <div class="mr-[15px]">
                  Get personality test
                </div>
                <img src="arrow-right.png" alt="arrow">
              </button>
            </div>
          </div>
          <div class="p-8 border-solid border border-footer-text rounded bg-white w-[392px] hover:border-darkish-blue hover:border-2 hover:p-[31px]">
            <div class="flex justify-between">
              <div>
                <div class="text-[28px] mb-4 text-plan-title text-bold whitespace-nowrap overflow-hidden">
                  6 month plan
                </div>
                <div class="text-plan-info font-medium whitespace-nowrap overflow-hidden">
                  Billed every 6 months
                </div>
              </div>
              <div class="flex flex-col items-end ml-[45px]">
                <div class="text-[14px] line-through text-secondary text-semibold">
                  $7.00
                </div>
                <div class="text-[32px] text-secondary text-bold">
                  $1.75
                </div>
                <div class="text-plan-info whitespace-nowrap overflow-hidden">
                  per week
                </div>
              </div>
            </div>
            <div>
              <button
                class="bg-primary py-[14px] hover:py-[15px] px-[24px] hover:px-[25px] rounded mt-6 flex items-center justify-center text-white w-full hover:shadow-card border-solid border border-footer-text bg-plan-button-background text-plan-button-text hover:text-white hover:bg-primary hover:border-none"
                @click="toggleAction()"  
              >
                <div class="mr-[15px]">
                  Get personality test
                </div>
                <img class="hover:hidden" src="arrow-right-grey.png" alt="arrow">
              </button>
            </div>
          </div>
        </div>
        <div class="flex justify-center items-center pt-6">
          <img
            class="h-8"
            :class="isInvalid ? '' : 'hidden'"
            src="exclamation.svg"
            alt=""
          >
          <input
            class="mr-[11px] rounded-[0.25rem] border-[#B7B7B7] bg-greyish"
            type="checkbox"
            x-model="isChecked"
          >
          <div class="font-sans-pro text-[18px] lg:text-[16px]">
            I agree to the <a href="#" class="text-mail">T&Cs</a> and <a href="#" class="text-mail">Privacy policy </a>
          </div>
        </div>
        <div class="flex justify-center pb-16 lg:pb-[40px] pt-8 lg:pt-4">
          <img src="trusted.png" alt="trusted">
        </div>
      </main>
      <x-new-footer></x-new-footer>
    </body>
</html>
