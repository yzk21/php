(function(){
    'use strict';
    
    var cmds = document.getElementsByClassName('del');
    var i;
    
    for (i = 0; i < cmds.length; i++){
       cmde[i].addEventListener('click',function(e){
           e.preventDefault();
           if(comfirm('are you sure?')){
               document.getElementById('from_' + this.dataset.id).submit();
           }
       });
    }
})();