const loginBtn = document.querySelector('#loginBtn');

loginBtn.addEventListener("click",(e)=>{
   e.preventDefault();

   const username = document.querySelector('#username').value;
   const password = document.querySelector('#password').value;


   if(!username){
     isAlert("Name!","Preenche o campo",4*1000);
   } else if(!password){
     isAlert("Password!","Preenche o campo",4*1000);
   }

   function isAlert(type,message,time){  
         const messageArea = document.querySelector('#message');
        const $tagB = document.querySelector('#message  b');
        const $tagP = document.querySelector('#message  p');
        messageArea.style.display= 'flex';
         setInterval(()=>{
        messageArea.style.display= 'none';
         },time)
         $tagB.innerHTML = type;  
         $tagP.innerHTML = message; 
   }
   
})