@extends('layouts.app')

@section('header')
<style>
    .toggle-wrapper {position: relative;display: inline-block;}

    .firstsvg {transition: fill 0.3s ease;                      fill: #bbb;}
    .toggle-wrapper input[type="checkbox"]:checked ~ .firstsvg {fill: #fff;}
    .secondsvg {transform: translate(0, -100%);opacity: 0;      fill:#bbb;}
    .toggle-wrapper input[type="checkbox"]:checked ~ .secondsvg{fill: #fff;animation: blurAnimation 2s infinite;}
    .thirdsvg {transition: fill 0.3s ease;                      fill: #bbb;}
    .toggle-wrapper input[type="checkbox"]:checked ~ .thirdsvg {fill: #bbbbbb00;}
    .fourthsvg {transform: translate(0, -100%);opacity: 0;      fill:#bbb;}
    .toggle-wrapper input[type="checkbox"]:checked ~ .fourthsvg {fill: #fff; opacity:1;}
    .fifthsvg {transform: translate(0, -200%);opacity: 0;      fill:#bbb;}
    .toggle-wrapper input[type="checkbox"]:checked ~ .fifthsvg{fill: #fff;animation: blurAnimation 2s infinite;}
    @keyframes blurAnimation {
        0%, 100% {filter: blur(3px);opacity: 40%;}
        50%      {filter: blur(4px);opacity: 100%;}}

</style>

<div id="topcontrols">
    <ul class="flex gap-[10px] justify-end">
        <label class="toggle-wrapper rounded-lg w-[50px] h-[50px] flex justify-center items-center cursor-pointer
            bg-[#00006665] hover:bg-[#0000AA65] has-[:checked]:bg-[#0000FF65]" style="z-index:10;">
            <input type="checkbox" class="opacity-0 absolute w-full h-full" checked>
            <svg class="firstsvg p-[10px]" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 20 20" style="enable-background:new 0 0 512 512" xml:space="preserve">
                <path d="M9.383 3.076A1 1 0 0 1 10 4v12a1 1 0 0 1-1.707.707L4.586 13H2a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h2.586l3.707-3.707a1 1 0 0 1 1.09-.217zm5.274-.147a1 1 0 0 1 1.414 0C17.88 4.737 19 7.239 19 9.999s-1.12 5.263-2.929 7.072a1 1 0 0 1-1.414-1.414A7.971 7.971 0 0 0 17 10a7.97 7.97 0 0 0-2.343-5.657 1 1 0 0 1 0-1.414zm-2.829 2.828a1 1 0 0 1 1.415 0A5.983 5.983 0 0 1 15 10a5.984 5.984 0 0 1-1.757 4.243 1 1 0 0 1-1.415-1.415A3.984 3.984 0 0 0 13 10a3.983 3.983 0 0 0-1.172-2.828 1 1 0 0 1 0-1.415z" data-original="#000000" fill-rule="evenodd" clip-rule="evenodd"/>
            </svg>
            <svg class="secondsvg absolute p-[10px]" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 20 20" style="enable-background:new 0 0 512 512" xml:space="preserve">
                <path d="M9.383 3.076A1 1 0 0 1 10 4v12a1 1 0 0 1-1.707.707L4.586 13H2a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h2.586l3.707-3.707a1 1 0 0 1 1.09-.217zm5.274-.147a1 1 0 0 1 1.414 0C17.88 4.737 19 7.239 19 9.999s-1.12 5.263-2.929 7.072a1 1 0 0 1-1.414-1.414A7.971 7.971 0 0 0 17 10a7.97 7.97 0 0 0-2.343-5.657 1 1 0 0 1 0-1.414zm-2.829 2.828a1 1 0 0 1 1.415 0A5.983 5.983 0 0 1 15 10a5.984 5.984 0 0 1-1.757 4.243 1 1 0 0 1-1.415-1.415A3.984 3.984 0 0 0 13 10a3.983 3.983 0 0 0-1.172-2.828 1 1 0 0 1 0-1.415z" data-original="#000000" fill-rule="evenodd" clip-rule="evenodd"/>
            </svg>
            <div class="absolute rounded-lg w-[50px] h-[50px] bg-[#00000000] border-[#ffffff90] border hidden dark:block secondsvg" style="transform:translate(0, -100%);"></div>
        </label>

        <label class="toggle-wrapper rounded-lg w-[50px] h-[50px] flex justify-center items-center cursor-pointer relative
            bg-[#00006665] hover:bg-[#0000AA65] has-[:checked]:bg-[#0000FF65]">
            <input type="checkbox" class="opacity-0 absolute w-full h-full">
            <svg class="firstsvg p-[10px]" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 512.001 512.001">
                <path d="M167.228 82.855v272.542c-15.859-14.147-36.757-22.76-59.632-22.76-49.45 0-89.681 40.231-89.681 89.682s40.231 89.682 89.681 89.682c49.389 0 89.578-40.13 89.68-89.495h.002V203.475l266.757-67.621v147.195c-15.859-14.147-36.757-22.76-59.631-22.76-49.451 0-89.682 40.231-89.682 89.681 0 49.451 40.231 89.682 89.682 89.682 49.45 0 89.681-40.232 89.681-89.682V0L167.228 82.855z"/>
            </svg>
            <svg class="secondsvg absolute p-[10px]" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 512.001 512.001">
                <path d="M167.228 82.855v272.542c-15.859-14.147-36.757-22.76-59.632-22.76-49.45 0-89.681 40.231-89.681 89.682s40.231 89.682 89.681 89.682c49.389 0 89.578-40.13 89.68-89.495h.002V203.475l266.757-67.621v147.195c-15.859-14.147-36.757-22.76-59.631-22.76-49.451 0-89.682 40.231-89.682 89.681 0 49.451 40.231 89.682 89.682 89.682 49.45 0 89.681-40.232 89.681-89.682V0L167.228 82.855z"/>
            </svg>
            <div class="absolute rounded-lg w-[50px] h-[50px] bg-[#00000000] border-[#ffffff90] border hidden dark:block secondsvg" style="transform:translate(0, -100%);"></div>
        </label>

        <label class="toggle-wrapper rounded-lg w-[50px] h-[50px] flex justify-center items-center cursor-pointer relative
            bg-[#00006665] hover:bg-[#0000AA65] has-[:checked]:bg-[#0000FF65]">
            <input type="checkbox" id="dark-mode-toggle" class="opacity-0 absolute w-full h-full">
            <svg class="thirdsvg p-[10px]" width="100%" height="100%" viewBox="-2 -2 24 24" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin" class="jam jam-sun">
                <path d="M10 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 2a5 5 0 1 1 0-10 5 5 0 0 1 0 10zm0-15a1 1 0 0 1 1 1v2a1 1 0 0 1-2 0V1a1 1 0 0 1 1-1zm0 16a1 1 0 0 1 1 1v2a1 1 0 0 1-2 0v-2a1 1 0 0 1 1-1zM1 9h2a1 1 0 1 1 0 2H1a1 1 0 0 1 0-2zm16 0h2a1 1 0 0 1 0 2h-2a1 1 0 0 1 0-2zm.071-6.071a1 1 0 0 1 0 1.414l-1.414 1.414a1 1 0 1 1-1.414-1.414l1.414-1.414a1 1 0 0 1 1.414 0zM5.757 14.243a1 1 0 0 1 0 1.414L4.343 17.07a1 1 0 1 1-1.414-1.414l1.414-1.414a1 1 0 0 1 1.414 0zM4.343 2.929l1.414 1.414a1 1 0 0 1-1.414 1.414L2.93 4.343A1 1 0 0 1 4.343 2.93zm11.314 11.314 1.414 1.414a1 1 0 0 1-1.414 1.414l-1.414-1.414a1 1 0 1 1 1.414-1.414z"/>
            </svg>
            <svg class="fourthsvg p-[14px]" width="100%" height="100%" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.707.003a.5.5 0 0 0-.375.846 6 6 0 0 1-5.569 10.024.5.5 0 0 0-.519.765A7.5 7.5 0 1 0 7.707.003Z"/>
            </svg>
            <svg class="fifthsvg p-[14px]" width="100%" height="100%" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.707.003a.5.5 0 0 0-.375.846 6 6 0 0 1-5.569 10.024.5.5 0 0 0-.519.765A7.5 7.5 0 1 0 7.707.003Z"/>
            </svg>
            <div class="absolute rounded-lg w-[50px] h-[50px] bg-[#00000000] border-[#ffffff90] border hidden dark:block secondsvg" style="transform:translate(0, -300%);"></div>
        </label>
    </ul>
</div>
@endsection

@section('content')
<div id="homeintroduction" 
    class="mt-[10px] px-[5px] mx-auto py-[10px] gap-2 flex items-center justify-center rounded-xl shadow-xl max-w-[620px] min-w-[300px] h-[150px] sm:h-[200px] bg-[#FFFFFF50] dark:bg-[#00000050]">
    <div class="w-[100px] sm:w-[150px] flex-shrink-0 flex flex-col">
        <img src="{{ asset('images/mahface.webp') }}" alt="My face" class="w-[100px] h-[100px] sm:w-[150px] sm:h-[150px] rounded-full">
        <span class="text-center mt-[5px] text-sm sm:text-base font-bold h-[30px] text-[#00000090] dark:text-[#ffffff90]" style="line-height:1rem;">Orestis <br> Antonopoulos</span>
    </div>
    <div class="flex justify-center px-[5px]">
        <span class="font-bold text-sm sm:text-base text-[#00000090] dark:text-[#ffffff90]"> 
        Hello! I'm a Junior Full-Stack Developer with a knack for audio-visuals, 
        currently exploring the dynamic world of DevOps.
        </span>
    </div>
</div>

<div id="homebuttons" class="absolute bottom-2 flex flex-col items-center w-full"> {{-- 4 Main Buttons --}}
    <div class="flex gap-2 mb-2">
        <button class="w-[85px] h-[75px] flex flex-col items-center justify-center hover:cursor-pointer relative rounded-ss-3xl buttonhover" 
            onclick="selectAbout()">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-[40px] clickthrough fill-[#bbb] dark:fill-[#333]" width="40" height="40" viewBox="0 0 25 25" style="enable-background:new 0 0 512 512" xml:space="preserve"><path d="M21.9 3.6c0-1.7-1.4-3.1-3.1-3.1h-8c-.5 0-.9.1-1.2.3-.3.1-.7.3-.9.5L4.1 5.8c-.3.2-.5.5-.7.9s-.3.8-.3 1.3v13.3c0 1.7 1.4 3.1 3.1 3.1h12.6c1.7 0 3.1-1.4 3.1-3.1zm-9.4 3.6c1.5 0 2.7 1.2 2.7 2.7s-1.2 2.7-2.7 2.7-2.7-1.2-2.7-2.7 1.2-2.7 2.7-2.7zM16.1 19H9.6c-1.7 0-2.3-.8-1.9-1.8.5-1.3 1.5-2.3 2.7-2.8.2-.1.4-.1.6 0 1 .4 2.2.3 3.1 0 .2-.1.4-.1.6 0 1.2.6 2.2 1.6 2.7 2.9.3.8-.4 1.7-1.3 1.7z" data-original="#000000"/></svg>
            <span class="text-base font-bold absolute clickthrough text-[#BBB] dark:text-[#333]" style="transform:rotate(-90deg) translate(0,38px);"> ABOUT </span>
        </button>
        <button class="w-[85px] h-[75px] flex flex-col items-center justify-center hover:cursor-pointer relative rounded-se-3xl buttonhover" 
            onclick="selectContact()">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] clickthrough fill-[#bbb] dark:fill-[#333]" width="512" height="512" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
  <path fill-rule="evenodd" d="M189.279 107.079h284.235L304.693 222.812l-114.834-78.723c4.372-11.707 4.409-24.94-.58-37.01zm-74.337 67.172 41.43-25.226c12.295-7.486 16.376-23.458 9.178-35.925l-37.403-64.784c-3.837-6.647-9.645-10.923-17.131-12.613-7.487-1.691-14.567-.326-20.889 4.027L21.915 86.694C-10.554 201.098 135.355 448.778 247.259 477l74.778-35.591c6.93-3.298 11.653-8.748 13.932-16.077s1.48-14.496-2.358-21.143l-37.403-64.784c-7.197-12.467-23.07-16.919-35.701-10.014l-42.561 23.266c-42.09-37.433-91.63-123.238-103.004-178.406zm379.216-52.288L311.443 247.221c-4.275 2.918-9.768 2.69-13.741-.165l-121.3-83.155a50.509 50.509 0 0 1-7.549 5.624l-26.204 15.954c13.767 44.43 47.832 103.432 79.426 137.569l26.919-14.716c24.052-13.148 54.292-4.666 67.997 19.073l23.196 40.176h135.108c10.668 0 19.396-8.728 19.396-19.396v-221.71a19.25 19.25 0 0 0-.533-4.512z" clip-rule="evenodd" data-original="#000000"/>
</svg>
            <span class="text-base font-bold absolute clickthrough text-[#BBB] dark:text-[#333]" style="transform:rotate(90deg) translate(0,38px);"> CONTACT </span>
        </button>
    </div>
    <div class="flex gap-2">
        <button class="w-[85px] h-[75px] flex flex-col items-center justify-center hover:cursor-pointer relative rounded-es-3xl buttonhover" 
            onclick="selectProject()">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-[40px] clickthrough fill-[#bbb] dark:fill-[#333]" width="512" height="512" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve"><path fill-rule="evenodd" d="M18 2C9.163 2 2 9.163 2 18v28c0 8.837 7.163 16 16 16h28c8.837 0 16-7.163 16-16V18c0-8.837-7.163-16-16-16zm10 30a2 2 0 0 1-.662 1.487l-10 9a2 2 0 1 1-2.676-2.974L23.01 32l-8.348-7.513a2 2 0 0 1 2.676-2.974l10 9A2 2 0 0 1 28 32zm20 11a2 2 0 1 0 0-4H32a2 2 0 1 0 0 4z" clip-rule="evenodd" data-original="#000000"/></svg>
            <span class="text-base font-bold absolute clickthrough text-[#BBB] dark:text-[#333]" style="transform:rotate(-90deg) translate(0,38px);"> PROJECTS </span>
        </button>
        <button class="w-[85px] h-[75px] flex flex-col items-center justify-center hover:cursor-pointer relative rounded-ee-3xl buttonhover" 
            onclick="selectSkills()">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-[40px] clickthrough fill-[#bbb] dark:fill-[#333]" width="512" height="512" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512 512" xml:space="preserve"><path d="M507.606 93.77a14.991 14.991 0 0 0 0-21.212L439.44 4.394A14.948 14.948 0 0 0 428.835 0c-3.84 0-7.678 1.465-10.608 4.394l-57.559 57.558 89.379 89.377zM1.073 491.43a15 15 0 0 0 19.497 19.497l104.424-41.772-82.154-82.152zm399.385-202.17c-6.664 0-13.359.597-20.006 1.813L220.929 131.549c6.541-35.789-4.854-73.016-30.771-98.936C168.818 11.274 140.24.016 111.282.014a111.022 111.022 0 0 0-47.907 10.845A15 15 0 0 0 59.233 35l53.664 53.664-24.23 24.23-53.668-53.663a15.009 15.009 0 0 0-13.142-4.178 15.007 15.007 0 0 0-11 8.32c-20.303 42.521-11.558 93.47 21.76 126.783 21.105 21.106 49.71 32.582 78.932 32.582 6.662 0 13.354-.597 20-1.811L291.076 380.45c-6.545 35.787 4.846 73.01 30.764 98.932 21.346 21.343 49.922 32.602 78.883 32.602a111.065 111.065 0 0 0 47.906-10.846 14.997 14.997 0 0 0 8.318-11 14.998 14.998 0 0 0-4.178-13.143l-53.664-53.662 24.23-24.23 53.66 53.664a14.99 14.99 0 0 0 13.142 4.178 15.005 15.005 0 0 0 11-8.318c20.311-42.517 11.568-93.469-21.754-126.788-21.104-21.105-49.706-32.579-78.925-32.579z" data-original="#bbb"/><path d="m60.396 362.161 84.952-84.952 89.365 89.366-84.951 84.952zm216.773-216.728 62.234-62.235 89.366 89.366-62.234 62.234z" data-original="#bbb"/></svg>

            <span class="text-base font-bold absolute clickthrough text-[#BBB] dark:text-[#333]" style="transform:rotate(90deg) translate(0,38px);"> SKILLS </span>
        </button>
    </div>
</div>

@endsection

@section('scripts')
<script>
function addClass(elementId, className) {
    var element = document.getElementById(elementId);
    if (element.classList.contains(className)) {
        //do nothing
    } else {
        element.classList.add(className);
    }
}
function removeClass(elementId, className) {
    var element = document.getElementById(elementId);
    if (element.classList.contains(className)) {
        element.classList.remove(className);
    } else {
        //do nothing
    }
}
function hideHome() {
    var homeIntroduction = document.getElementById('homeintroduction');
    var homeButtons = document.getElementById('homebuttons');
    addClass(homeButtons.id, 'clickthrough');
    addClass(homeButtons.id, 'fade-out-down');
    addClass(homeIntroduction.id, 'fade-out-left');
    requestAnimationFrame(function() {
        setTimeout(() => {
            addClass(homeButtons.id, 'hidden');
            addClass(homeIntroduction.id, 'hidden');
            removeClass(homeButtons.id, 'clickthrough');
            removeClass(homeButtons.id, 'fade-out-down');
            removeClass(homeIntroduction.id, 'fade-out-left');
        }, 250);
    });
}
function backHome() {
    var homeIntroduction = document.getElementById('homeintroduction');
    var homeButtons = document.getElementById('homebuttons');
    var aboutSection = document.getElementById('aboutsection');
    var contactSection = document.getElementById('contactsection');
    var projectSection = document.getElementById('projectsection');
    var skillsSection = document.getElementById('skillssection');
    if(!aboutSection.classList.contains('hidden')) {
        addClass(aboutSection.id, 'fade-out-right');
        requestAnimationFrame(function() {
            setTimeout(() => {
                addClass(aboutSection.id, 'hidden');
                removeClass(aboutSection.id, 'fade-out-right');
                removeClass(homeButtons.id, 'hidden');
                removeClass(homeIntroduction.id, 'hidden');
                addClass(homeButtons.id, 'fade-in-up');
                addClass(homeIntroduction.id, 'fade-in-right');
            }, 250);
        });
        requestAnimationFrame(function() {
            setTimeout(() => {
                removeClass(homeButtons.id, 'fade-in-up');
                removeClass(homeIntroduction.id, 'fade-in-right');
            }, 500);
        });
    } else if(!contactSection.classList.contains('hidden')) {
        addClass(contactSection.id, 'fade-out-right');
        requestAnimationFrame(function() {
            setTimeout(() => {
                addClass(contactSection.id, 'hidden');
                removeClass(contactSection.id, 'fade-out-right');
                removeClass(homeButtons.id, 'hidden');
                removeClass(homeIntroduction.id, 'hidden');
                addClass(homeButtons.id, 'fade-in-up');
                addClass(homeIntroduction.id, 'fade-in-right');
            }, 250);
        });
        requestAnimationFrame(function() {
            setTimeout(() => {
                removeClass(homeButtons.id, 'fade-in-up');
                removeClass(homeIntroduction.id, 'fade-in-right');
            }, 500);
        });
    } else if(!projectSection.classList.contains('hidden')) {
        addClass(projectSection.id, 'fade-out-right');
        requestAnimationFrame(function() {
            setTimeout(() => {
                addClass(projectSection.id, 'hidden');
                removeClass(projectSection.id, 'fade-out-right');
                removeClass(homeButtons.id, 'hidden');
                removeClass(homeIntroduction.id, 'hidden');
                addClass(homeButtons.id, 'fade-in-up');
                addClass(homeIntroduction.id, 'fade-in-right');
            }, 250);
        });
        requestAnimationFrame(function() {
            setTimeout(() => {
                removeClass(homeButtons.id, 'fade-in-up');
                removeClass(homeIntroduction.id, 'fade-in-right');
            }, 500);
        });
    } else if(!skillsSection.classList.contains('hidden')) {
        addClass(skillsSection.id, 'fade-out-right');
        requestAnimationFrame(function() {
            setTimeout(() => {
                addClass(skillsSection.id, 'hidden');
                removeClass(skillsSection.id, 'fade-out-right');
                removeClass(homeButtons.id, 'hidden');
                removeClass(homeIntroduction.id, 'hidden');
                addClass(homeButtons.id, 'fade-in-up');
                addClass(homeIntroduction.id, 'fade-in-right');
            }, 250);
        });
        requestAnimationFrame(function() {
            setTimeout(() => {
                removeClass(homeButtons.id, 'fade-in-up');
                removeClass(homeIntroduction.id, 'fade-in-right');
            }, 500);
        });
    }
    requestAnimationFrame(function() {
        setTimeout(() => {
            removeClass(homeButtons.id, 'fade-in-right');
            removeClass(homeIntroduction.id, 'fade-in-right');
        }, 500);
    });
}
function selectAbout() {
    var aboutSection = document.getElementById('aboutsection');
    hideHome();
    requestAnimationFrame(function() {
            removeClass(aboutSection.id, 'hidden');
            addClass(aboutSection.id, 'fade-in-left');
    });
    requestAnimationFrame(function() {
        setTimeout (() => {
            removeClass(aboutSection.id, 'fade-in-left');
        }, 500);
    });
}
function selectContact() {
    var contactSection = document.getElementById('contactsection');
    hideHome();
    requestAnimationFrame(function() {
            removeClass(contactSection.id, 'hidden');
            addClass(contactSection.id, 'fade-in-left');
    });
    requestAnimationFrame(function() {
        setTimeout (() => {
            removeClass(contactSection.id, 'fade-in-left');
        }, 500);
    });
}
function selectProject() {
    var projectSection = document.getElementById('projectsection');
    hideHome();
    requestAnimationFrame(function() {
            removeClass(projectSection.id, 'hidden');
            addClass(projectSection.id, 'fade-in-left');
    });
    requestAnimationFrame(function() {
        setTimeout (() => {
            removeClass(projectSection.id, 'fade-in-left');
        }, 500);
    });
}
function selectSkills() {
    var skillsSection = document.getElementById('skillssection');
    hideHome();
    requestAnimationFrame(function() {
            removeClass(skillsSection.id, 'hidden');
            addClass(skillsSection.id, 'fade-in-left');
    });
    requestAnimationFrame(function() {
        setTimeout (() => {
            removeClass(skillsSection.id, 'fade-in-left');
        }, 500);
    });
}

const darkModeToggle = document.getElementById('dark-mode-toggle');
darkModeToggle.addEventListener('change', function() {
  document.body.classList.toggle('dark', this.checked);
});

function sendEmail() {
    const tempLink = document.createElement('a');
    tempLink.href = 'mailto:skyscreamer@live.com';
    tempLink.target = '_blank';
    tempLink.click();
    tempLink.remove();
}
function copyEmail() {
    navigator.clipboard.writeText('skyscreamer@live.com').then(() => {
        alert('Email copied to clipboard!');
    });
}
function callPhone() {
    const tempLink = document.createElement('a');
    tempLink.href = 'tel:+306937832411';
    tempLink.target = '_blank';
    tempLink.click();
    tempLink.remove();
}
function copyPhone() {
    navigator.clipboard.writeText('+306937832411').then(() => {
        alert('Phone number copied to clipboard!');
    });
}
</script>
@endsection
