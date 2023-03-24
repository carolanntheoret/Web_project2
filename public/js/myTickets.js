const passes = document.querySelectorAll(".pass .remove")

for (const pass of passes) {
    pass.addEventListener('click', (e) => {
        //display block
        fetch(`/get-reservation/${id}`).then(reply => reply.json()).then(data => {
            console.log(data)
        })
    })
}
