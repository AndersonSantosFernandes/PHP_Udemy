function showDelete(vlrid) {
    var show = window.document.getElementById('deletar')
    show.innerHTML = `

    <form action="movie_process.php" method="POST">
        <p class="msg-modal">Deseja realmente apagar o registro?</p>          
        <p style="color: red " class="null">A ação é irreversível</p>

        <input type="hidden" name="type" value="delete">
        <input type="hidden" name="id" value="${vlrid}">
        <input type="submit" value="Deletar" class="confirm-delete">
        <input type="button" value="Cancelar" onclick="cancelaDelete()" class="cancel-delete">

    </form>
`
}
function cancelaDelete() {
    var hiden = window.document.getElementById('deletar');
    hiden.innerHTML = ``
}
