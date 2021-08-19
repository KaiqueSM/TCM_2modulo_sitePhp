function AbreMenu()
{
    document.getElementById('itensMenu').style.height = "97%";
    document.getElementById('itensMenu').style.zIndex = "2";
    document.getElementById('itensMenu').style.visibility = "visible";
    document.getElementById('ulMenuMobile').style.opacity = "1";
}
function FechaMenu()
{
    document.getElementById('ulMenuMobile').style.opacity = "0";
    document.getElementById('itensMenu').style.height = "0%";
    document.getElementById('itensMenu').style.zIndex = "-1";
    document.getElementById('itensMenu').style.visibility = "hidden";
}