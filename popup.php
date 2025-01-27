<?php
session_start();
function displayMessage($name, $variant)
{
  if(isset($_SESSION[$name])){
   ?>
<div class="position-fixed flash-message z-3 p-3 bottom-0 end-0" style="transform:translateY(105%); opacity:0;transition:all .6s; background:
                      <?php
                      if($variant == 'red'){
                        echo "red";
                      } elseif($variant == 'green'){
                        echo "green";
                      }
                      ?>
                      ">
        <div class="card p-4 rounded-3 text-white bg-transparent border-0 position-relative">
        <i class="bi close-message bi-x fs-2 position-absolute end-0 top-0 cursor-pointer"></i>
        <h4>Message</h4>
        <p class="text-white"><?php echo $_SESSION[$name]?></p>
        <button class="btn close-message btn-dark">Ok</button>
     
     </div>
</div>
<?php 
}
   unset($_SESSION[$name]);
?>
<script>
  let message =document.querySelector('.flash-message');
  let close =document.querySelectorAll('.close-message')
   if(message){
    setTimeout(() => {
      message.style.transform = 'translateY(0)'
      message.style.opacity = '1'
   },100)

  setTimeout(() => {
     message.style.transform = 'translateY(105%)'
      message.style.opacity = '0'
  }, 6000);

    close.forEach((item,index) => {
       item.addEventListener('click', () => {
         message.style.transform = 'translateY(105%)'
      message.style.opacity = '0'
       })
    })
      
    ;
    }
</script>
<?php } ?>