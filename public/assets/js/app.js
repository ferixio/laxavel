var tl = gsap.timeline();
tl.to('#loading>img', {duration:1.2, opacity:0, display:'none'}, '+=1.5')
.to('#loading',{duration:1, height:0, display:'none'})
.to('#main-content',{duration:1, opacity:1, display:'block'},'-=2.5')
.to('#img404',{duration:1, opacity:1 });

// UIkit.notification({
//   message: 'my-message!',
//   status: 'primary',
//   pos: 'top-right',
//   timeout: 5000
// });

// // Shortcuts
// UIkit.notification('My message');
// UIkit.notification('My message', status);
// UIkit.notification('My message', { /* options */ });