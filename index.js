
cursor = document.querySelector(".cursor");

document.addEventListener("mousemove", (mouseEvent) => {
    cursor.style.left = mouseEvent.x + 0 + "px";
    cursor.style.top = mouseEvent.y + 0 + "px";
    cursor.style.transition = "0.1s"

    //yeta mouse event chai k kaam vairaxa vanney ho... mouse ko kaam
    //co-ordinates haru calculate vairaka xan
    // console.log(mouseEvent.x);
})

const tl = gsap.timeline();
const tl2 = gsap.timeline();

gsap.to(".nav", {
    scrollTrigger: {
        scrub: 1,

        trigger: ".nav",
        scroller: "body",
        start: "top -10%",
        end: "top -11%",
    },

   
    backgroundColor: "rgba(255, 255, 255, 0.2)",
    boxShadow:"0 4px 30px rgba(0, 0, 0, 0.1)",
    backdropFilter: "blur(60px)",
    webkitBackdropFilter: "blur(5px)",
    height: "100px",



})

gsap.from(".text", {
    duration: 0.5,
    opacity:-1

})
tl.from(".page1_text .p1", {
 
    y: 190,
    duration: 0.7,
    opacity:0
    ,
    delay:0.5
}
)
tl.from(".page1_text .p2", {
 
    y: 105,
    
    duration: 0.7,
    opacity:0
    ,
    
})



tl.from(".mighty", {
 
    duration: 0.5,
    opacity:0
    ,
    
})

tl.from(".join_now",{
    duration: 1,
    opacity:0
    ,  
})


gsap.to(".main", {
    backgroundColor: "#000",
    scrollTrigger: {
        trigger: ".main",
        scroller: "body",
        start: "top -2%"
        , end: "top -80%"
        , scrub: 2
    }
})

gsap.to(".about",{

    scrollTrigger: {
        trigger: "h1",
        scroller: "body",
        start: "top -40%"
        , end: "top -43%"
        , scrub: 0,
        marker:true
    },
    fontSize:"30px",

    
})

gsap.to(".content",{

    scrollTrigger: {
        trigger: ".content",
        scroller: "body",
        start: "top 75%"
        , end: "bottom 100%"
        , scrub:0.5,
    },
opacity:1

    
})
