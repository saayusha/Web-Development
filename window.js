var win;
function createWindow(){
win=window.open("","My window","width=300,height=200");
}
function showAlert(){
    if(win==undefined)
    {
        window.alert("First create the new window, then show alert in it");
    }
    else{
        win.alert("Thid is an alert");
    }
}
function closewin(){
    win.close();
}
