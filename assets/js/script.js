const logo_side_header = document.getElementById('logo_side_header');
const logo_sidebar = document.getElementById('logo_sidebar');

//=============== letter auto ===============
const itens_letter = document.querySelectorAll('.top_content_list');


//==================== letter auto marquee ==============================

//=== check soma total da largura de todos os itens ==========================
const item_list_marquee = document.querySelectorAll('.item_list_marquee');
let width_total_itens_marquee = 0;
item_list_marquee.forEach((item) => {
    width_total_itens_marquee += item.getBoundingClientRect().width;

})
console.log(width_total_itens_marquee);
//=== check soma total da largura de todos os itens ==========================


let count = 0;
let play_marquee = true;
itens_letter.forEach((item) => {

    if(play_marquee){
        setInterval(function(){
            if(count > width_total_itens_marquee){
                count = 0
            }
            count += 1;
            //console.log(count);
            item.style.left = "-"+count+"px";
        },30);
    }

});
document.querySelector('.list_marquee').addEventListener('click', () => {
    
    
})
//==================== letter auto marquee ===================================



//============== controll sidebar ========================================================
const sidebar_site = document.querySelector('.sidebar_site');
const btn_menu_sidebar = document.querySelector('.btn_menu_sidebar');
const btn_close_sidebar_site = document.querySelector('.btn_close_sidebar_site');
const over_screen = document.querySelector('.over_screen');

btn_menu_sidebar.addEventListener('click', () => {
    over_screen.classList.add('open_over_screen');
    sidebar_site.classList.add('open_sidebar_site');
})
over_screen.addEventListener('click', () => {
    over_screen.classList.remove('open_over_screen');
    sidebar_site.classList.remove('open_sidebar_site');
})
btn_close_sidebar_site.addEventListener('click', () => {
    over_screen.classList.remove('open_over_screen');
    sidebar_site.classList.remove('open_sidebar_site');
})
//============== controll sidebar ========================================================


//=================== switch control theme site ============================================
const switch_theme_dark = document.querySelector('.switch_theme_dark');
const switch_theme_normal = document.querySelector('.switch_theme_normal');
const switch_theme = document.querySelector('.switch_theme');

switch_theme_dark.addEventListener('click', () => {
        
    switch_theme.classList.add('switch_dark');
    document.body.classList.add('dark_mode');
    logo_side_header.setAttribute('src', src_logo_dark);
    logo_sidebar.setAttribute('src', src_logo_dark);
    setCookie('dark_mode', '1', .5);

})

switch_theme_normal.addEventListener('click', () => {

    switch_theme.classList.remove('switch_dark');
    document.body.classList.remove('dark_mode');
    logo_side_header.setAttribute('src', src_logo_normal);
    logo_sidebar.setAttribute('src', src_logo_normal);
    setCookie('dark_mode', '', .5);

})
//=================== switch control theme site ============================================



// ============================ control menu mobile ========================================
const btn_menu_mobile = document.querySelector('.btn_menu_mobile');
const menu_site = document.querySelector('nav.menu');

btn_menu_mobile.addEventListener('click', () => {
    if(menu_site.classList.contains('open_menu_mobile')){
        menu_site.classList.remove('open_menu_mobile')
    }else{
        menu_site.classList.add('open_menu_mobile')
    }
})
// ============================ control menu mobile ========================================






//============================== Cookies ==================================================
function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    let expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    let name = cname + "=";
    let ca = document.cookie.split(';');
    for(let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
        c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
        }
    }
    return "";
}

function checkCookie(cookie) {
    let user = getCookie(cookie);
    if (user != "") {
        return true
    }else{
        return false
    }
}

function check_cookie_card_mode(){
    if(checkCookie('dark_mode')){
       if(getCookie('dark_mode') == '1'){
            switch_theme.classList.add('switch_dark');
            document.body.classList.add('dark_mode');
            logo_side_header.setAttribute('src', src_logo_dark);
       }else{
            switch_theme.classList.remove('switch_dark');
            document.body.classList.remove('dark_mode');
            logo_side_header.setAttribute('src', src_logo_normal);
       }
    }
}

check_cookie_card_mode();
//============================== Cookies ==================================================





//================================= control font ===========================================
const btn_font_plus = document.querySelector('.btn_font_plus');
const btn_font_less = document.querySelector('.btn_font_less');

btn_font_plus.addEventListener('click', () => {

    document.body.classList.add('font_plus');
    setCookie('font_plus', '1', .5);

});
btn_font_less.addEventListener('click', () => {

    document.body.classList.remove('font_plus');
    setCookie('font_plus', '0', .5);

});


function check_font_site(){
    if(checkCookie('font_plus')){
        if(getCookie('font_plus') == '1'){
            document.body.classList.add('font_plus');
        }else{
            document.body.classList.remove('font_plus');
        }
    }
}
//================================= control font ===========================================




//================================== control submenus mobile ===============================
const submenus = document.querySelectorAll('nav.menu ul.menu li.menu-item-has-children');
const submenus_submenu = document.querySelectorAll('nav.menu li.menu-item-has-children ul.sub-menu li.menu-item-has-children');

submenus.forEach((item) => {

    item.addEventListener('click', (e) => {

        e.preventDefault();

        if(item.querySelector('ul.sub-menu').classList.contains('open_sub_menu_mobile')){
            item.querySelector('ul.sub-menu').classList.remove('open_sub_menu_mobile');
        }else{
            item.querySelector('ul.sub-menu').classList.add('open_sub_menu_mobile');
        }

        

    });

});

submenus_submenu.forEach((item) => {

    item.addEventListener('click', (e) => {

        e.preventDefault();

        if(e.currentTarget.querySelector('ul.sub-menu').classList.contains('open_sub_menu_mobile')){
            e.currentTarget.querySelector('ul.sub-menu').classList.remove('open_sub_menu_mobile');
        }else{
            e.currentTarget.querySelector('ul.sub-menu').classList.add('open_sub_menu_mobile');
        }

        

    });

});

//================================== control submenus mobile ===============================