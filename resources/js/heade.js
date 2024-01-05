const user_dropdown = document.querySelector('#user_dropdown');
const user_menu_button = document.querySelector('#user_menu_button');

user_menu_button.addEventListener('click', ()=>{
    if (user_dropdown.classList.contains('hidden')) {
        user_dropdown.remove('hidden');
    }else {
        user_dropdown.classList.add('hidden');
    }
})

const btn = document.querySelector('button.mobile_menu')
const menu = document.getElementById('menu');
const toggle = ()=>menu.classList.toggle('hidden');

btn.addEventListener('click', ()=>{
   
        menu.classList.toggle('hidden');
});

function myFunction() {
    document.getElementById("demo").innerHTML = "Hello World";
  }

  document.getElementById("demo").addEventListener("mouseover", mouseOver);
  document.getElementById("demo").addEventListener("mouseout", mouseOut);
  
  function mouseOver() {
    document.getElementById("demo").style.color = "red";
  }
  
  function mouseOut() {
    document.getElementById("demo").style.color = "black";
  }


const mobile_menu = document.querySelector('#mobile_menu');
const mobile_menu_button = document.querySelector('#mobile_menu_button');

mobile_menu_button.addEventListener('click', ()=>{
    if (mobile_menu.classList.contains('hidden')) {
        mobile_menu.remove('hidden');
    }else {
        mobile_menu.classList.add('hidden');
    }
})




function mobile_menu_button() {
  const mobile_menu=  document.getElementById("mobile_menu_button");
    if (mobile_menu.classList.contains('hidden')) {
        mobile_menu.remove('hidden');
    }else {
        v.classList.add('hidden');
    }
}



