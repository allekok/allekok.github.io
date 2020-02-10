/* Night mode */
const D = new Date;
const h = D.getHours();
if(!(h > 6 && h < 18))
{
    document.body.style.filter = "invert(1)";
}
