console.log('ok')
let h=document.getElementById('getcopyright');
let p=document.getElementById('getcopyright-p');
let btn=document.getElementById('next');
let a=document.getElementById('next-state');
let nextx=document.getElementById('copyright-next');
let form=document.getElementById('form');
function next(){
h.innerHTML='Copyright Violation';

p.innerHTML='In most countries, copyright is a legal right that protects original works of authorship. Typically, if you create an original work, you have a copyright from the moment you create it. Copyright covers a wide variety of types of works, including: Visual or audiovisual works: videos, movies, TV shows and broadcasts, video games, paintings, photographs ,Audio works: songs, musical compositions, sound recordings, spoken word recordings ,Written works: books, plays, manuscripts, articles, musical scores';


btn.style.display='none';
nextx.style.display='block';

}
function f2(){
alert('sa');


}

