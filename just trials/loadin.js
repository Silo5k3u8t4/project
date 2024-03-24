function fetchit(url)
        {
            fetch(url)
            .then(response => response.text())
            .then(data => {
                document.getElementById('content').innerHTML=data;
            })
            .catch(error => console.error('Error: ',error));
        }
        fetchit('tryother.html');