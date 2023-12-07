

let all_media = document.querySelectorAll('.all-user-box .media');
all_media.forEach(function (ele) {
    ele.addEventListener("click", function() {
        all_media.forEach(function (e) {
            e.classList.remove("active");
        });
        this.classList.add("active");
        requestData(this.id);
    })
})

function requestData(id) {
    console.log(id);
    // JavaScript code
    let req = new XMLHttpRequest();
    req.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            // The request has been completed successfully
            var response = this.responseText;
            // Handle the response data
            let data = JSON.parse(response);
            addDataToPage(data);

        } else {
            console.log('req failed');
        }
    };

    req.open("POST", "request/account-setting.php", true);
    req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    req.send(`id=${id}`);

}


function addDataToPage(data) {

    let group_id;    
    if (data['group_id'] == 1) {                                                           
        group_id = "admin";
    } else if (data['group_id'] == 2) {
        group_id = "Teacher";
    } else if (data['group_id'] == 3) {
        group_id = "parent";
    } else if (data['group_id'] == 4) {
        group_id = "student";
    }  else {
        group_id = "unknown";
    };

    document.querySelector('.full_name-js').innerHTML   = data['full_name'];
    document.querySelector('.group_id-js').innerHTML    = group_id;
    document.querySelector('.gender-js').innerHTML      = data['father_name'];
    document.querySelector('.birthday-js').innerHTML    = data['birthday'];
    document.querySelector('.father_name-js').innerHTML = data['father_name'];
    document.querySelector('.religion-js').innerHTML    = data['religon'];
    document.querySelector('.joing_date-js').innerHTML  = data['joing_date'];
    document.querySelector('.email-js').innerHTML       = data['email'];
    document.querySelector('.id_number-js').innerHTML   = data['id_number'];
    document.querySelector('.address-js').innerHTML     = data['address'];
    document.querySelector('.phone-js').innerHTML       = data['phone'];
}