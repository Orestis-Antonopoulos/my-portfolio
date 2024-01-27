@extends('layouts.app')

@section('header')
<style>
    .buttonbg   {animation-name: buttonbg;  animation-duration: 5s; animation-iteration-count: infinite;}
    @keyframes buttonbg {
        0%      {background: #00006665;}
        10%  {background: #22006670;}
        20%   {background: #44006675;}
        30%     {background: #66006680;}
        40%   {background: #44006675;}
        50%  {background: #22006670;}
        60%    {background: #00006665;}
        100%    {background: #00006665;}}
</style>

<div id="topcontrols">
    <ul class="flex gap-[10px] justify-end">
        <li class="rounded w-[50px] h-[50px]" style="background:#FFFFFF50"></li>
        <li class="rounded w-[50px] h-[50px]" style="background:#FFFFFF50"></li>
        <li class="rounded w-[50px] h-[50px]" style="background:#FFFFFF50"></li>
    </ul>
</div>
@endsection

@section('content')
<div id="homeintroduction" 
    class="mt-[10px] px-[5px] mx-auto py-[10px] gap-2 flex items-center justify-center rounded-xl shadow-xl max-w-[620px] min-w-[300px] h-[150px] sm:h-[200px]" 
    style="background:#FFFFFF50">
    <div class="w-[100px] sm:w-[150px] flex-shrink-0 flex flex-col">
        <img src="{{ asset('images/mahface.webp') }}" alt="My face" class="w-[100px] h-[100px] sm:w-[150px] sm:h-[150px] rounded-full">
        <span class="text-center mt-[5px] text-sm sm:text-base font-bold h-[30px]" style="color:#00000090; line-height:1rem;">Orestis <br> Antonopoulos</span>
    </div>
    <div class="flex justify-center px-[5px]">
        <span class="font-bold text-sm sm:text-base" style="color:#00000090;"> 
        Hello! I'm a Junior Full-Stack Developer with a knack for audio-visuals, 
        currently exploring the dynamic world of DevOps.
        </span>
    </div>
</div>

<div id="homebuttons" class="absolute bottom-2 flex flex-col items-center w-full"> {{-- 4 Main Buttons --}}
    <div class="flex gap-2 mb-2">
        <button class="w-[85px] h-[75px] flex flex-col items-center justify-center hover:cursor-pointer relative rounded-ss-3xl buttonbg" 
            style="background-color:#00006665;"
            onclick="selectAbout()">
            <img src="{{ asset('svg/aboutabd.svg') }}" alt="Description of the icon" class="w-[40px] clickthrough">
            <span class="text-base font-bold absolute clickthrough" style="transform:rotate(-90deg) translate(0,38px); color:#BBB;"> ABOUT </span>
        </button>
        <button class="w-[85px] h-[75px] flex flex-col items-center justify-center hover:cursor-pointer relative rounded-se-3xl buttonbg" 
            style="background-color:#00006665;"
            onclick="selectContact()">
            <img src="{{ asset('svg/contactabd.svg') }}" alt="Description of the icon" class="w-[50px] clickthrough">
            <span class="text-base font-bold absolute clickthrough" style="transform:rotate(90deg) translate(0,38px); color:#BBB;"> CONTACT </span>
        </button>
    </div>
    <div class="flex gap-2">
        <button class="w-[85px] h-[75px] flex flex-col items-center justify-center hover:cursor-pointer relative rounded-es-3xl buttonbg" 
            style="background-color:#00006665;"
            onclick="selectProject()">
            <img src="{{ asset('svg/projectsabd.svg') }}" alt="Description of the icon" class="w-[40px] clickthrough">
            <span class="text-base font-bold absolute clickthrough" style="transform:rotate(-90deg) translate(0,38px); color:#BBB;"> PROJECTS </span>
        </button>
        <button class="w-[85px] h-[75px] flex flex-col items-center justify-center hover:cursor-pointer relative rounded-ee-3xl buttonbg" 
            style="background-color:#00006665;"
            onclick="selectSkills()">
            <img src="{{ asset('svg/skillsabd.svg') }}" alt="Description of the icon" class="w-[40px] clickthrough">
            <span class="text-base font-bold absolute clickthrough" style="transform:rotate(90deg) translate(0,38px); color:#BBB;"> SKILLS </span>
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

</script>
@endsection
