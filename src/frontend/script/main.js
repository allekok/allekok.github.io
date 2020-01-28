/* Night mode */
const D = new Date;
const h = D.getHours();
if((h >= 0 && h <= 5) || h >= 21)
{
    document.body.style.filter = "invert(1)";
}
