<script>
    let hamburger=document.getElementsByClassName('hamburger')
    let hamburg=document.getElementsByClassName('hamburg')
    let cross=document.getElementsByClassName('cross')
    let mble=document.getElementsByClassName('mble')
    let card1=document.querySelectorAll(".card1")
    let card2=document.querySelectorAll(".card2")
    let landing=document.querySelectorAll('.landing-anim')

    let disp=1
    hamburger[0].addEventListener('click',()=>{
        if (disp==1) {
            hamburg[0].style.display='none'
            cross[0].style.display='flex'
            mble[0].style.display='block'
            disp=0
        }else{
            hamburg[0].style.display='flex'
            cross[0].style.display='none'
            mble[0].style.display='none'
            disp=1
        }
    })
    const anim1=new IntersectionObserver((enteries)=>{
        enteries.forEach((entry)=>{
            if(entry.isIntersecting){
                entry.target.classList.add('show-class')
            }
            else{
                entry.target.classList.remove('show-class')
            }
        })
    })
    card1.forEach((el)=>anim1.observe(el));


    const anim2=new IntersectionObserver((enteries)=>{
        enteries.forEach((entry)=>{
            if(entry.isIntersecting){
                entry.target.classList.add('show-class1')
            }
            else{
                entry.target.classList.remove('show-class1')
            }
        })
    })
    card2.forEach((el)=>anim2.observe(el));
    const anim3=new IntersectionObserver((enteries)=>{
        enteries.forEach((entry)=>{
            if(entry.isIntersecting){
                entry.target.classList.add('show-class2')
            }
            else{
                entry.target.classList.remove('show-class2')
            }
        })
    })
    landing.forEach((el)=>anim3.observe(el));
</script>
