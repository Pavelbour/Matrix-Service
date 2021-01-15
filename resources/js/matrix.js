const init = {
    method : "POST",
    body : JSON.stringify({
        "row1" : {
            "col1" : getElementById('r1c1').value,
            "col2" : getElementById('r1c2').value
        },
        "row2" : {
            "col1" : getElementById('r2c1').value,
            "col2" : getElementById('r2c2').value
        }
    })
}

getElementById('action-button').addEventListener('click', () => {
    fetch('\api\calculate-matrix', init).then((response) => {
        response.blob().then(myblob => {
             result = JSON.parse(myblob);
             getElementById('main-diagonal').innerHtml = result.maindiagonal;
             getElementById('secondary-diagonal').innerHtml = result.secondarydiagonal;
         })
     }
    )
});