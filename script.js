

    window.onload = function () {
          var date = new Date();
          var time = date.getHours()+':'+date.getMinutes()+':'+date.getSeconds();
          document.getElementsByTagName('div')[0].innerHTML = "Kell JS "+time;
          window.setTimeout(arguments.callee,5);
          
        
}