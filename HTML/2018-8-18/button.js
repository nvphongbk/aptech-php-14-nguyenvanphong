function anHien()
{
  var bg = document.getElementById('mydiv')
  console.log('hello')
  if (bg.style.display === 'none') {
    bg.style.display = 'block';
    bg.classList.add('bgg');
} else {
    bg.style.display = 'none';
    bg.classList.remove('bgg');
}
}