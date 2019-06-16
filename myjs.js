function Msg(message) {
    console.log(message);
    alert(message);
}
function btclick() {
    // Msg(document.getElementById("tb").value);
    Msg($("#tb").val());

    var ans = add(5, 9);
    console.log(ans);

}
function add(a, b) {
    return a + b;
}
