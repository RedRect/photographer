<div class="jumbotron">
    <div class = "row">
        <div class="col-lg-3 col-md-7 col-sm-6">
            <img style="height: 200px; width: 200px; display: block;" :src="result.profile_picture" >
        </div>
        <div class="col-lg-6 col-md-5 col-sm-6">
            <h1 class="display-3">@{{result.name}}</h1>
            <p class="text-danger">bio</p>
            <p class="lead">@{{result.bio}}</p>
        </div>

        <div class="col-lg-2 col-md-5 col-sm-auto">
            <div style="position: absolute; bottom: 0;">
                <h5>Phone</h5>
                <p class="text-danger">@{{result.phone}}</p>
                <h5>Email</h5>
                <p class="text-danger">@{{result.email}}</p>
            </div>
        </div>
    </div>

</div>
