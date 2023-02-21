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
itens_letter.forEach((item) => {

    
    setInterval(function(){
        if(count > width_total_itens_marquee){
            count = 0
        }
        count += 1;
        //console.log(count);
        item.style.left = "-"+count+"px";
    },30);


    

});


//==================== letter auto marquee ==============================



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

})

switch_theme_normal.addEventListener('click', () => {

    switch_theme.classList.remove('switch_dark');
    document.body.classList.remove('dark_mode');

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


