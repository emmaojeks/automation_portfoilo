document.getElementById('contactForm').addEventListener('submit', async function(e) {
    e.preventDefault();
    const formData = new FormData(this);
    const data = Object.fromEntries(formData.entries());
    console.log(data);

    document.querySelector('.alert').classList.add('d-none');

    if(!data.fullname || !data.email || !data.message){
        document.querySelector('.alert').classList.remove('d-none');
        document.querySelector('.alert').classList.add('alert-danger');
        document.querySelector('.alert-message').textContent = 'Please fill all fields';
        return;
    }

    try{
        let response = await fetch('process-form.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        })
        let result = await response.json();
        if(result.success){
            document.querySelector('.alert').classList.remove('d-none');
            document.querySelector('.alert').classList.add('alert-success');
            document.querySelector('.alert-message').textContent = 'Message sent successfully';
            this.reset();
        }
    }catch(error){
        console.log(error);
    }
})