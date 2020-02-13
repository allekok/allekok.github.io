/* Night mode */
function dark ()
{
    document.body.style.filter = "invert(1)";
}
const D = new Date;
const h = D.getHours();
if(!(h > 6 && h < 18))
    dark();
