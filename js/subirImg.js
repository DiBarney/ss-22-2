var imgUploader = document.getElementById('imgUploader');

imgUploader.addEventListener('change',(e)=>{
    fetch(`http://localhost/sliderConSubida/subirImg.php`,{
                method:"POST",
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                }
    }).then();
});