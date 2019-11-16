<div class="row">

    <div class="col-lg-4" v-for="alm in result.album" :key="alm.id">
        <div class="card mb-3">

            <div>
                <img style="height: 200px; width: 100%; display: block;" :src=alm.img>
                <h2  style="color:white; position: absolute; top: 0; left: 20px; bottom:140px; margin-top: 35%">@{{ alm.title }}</h2>
            </div>
                <div class="card-body">
                <p class="card-text">@{{ alm.description }}</p>
            </div>
            <div class="card-footer text-muted" >
                <span class="badge" style="float: left"><img src="../heart.png" v-if="alm.featured"/></span>
                <p  style="float:right;vertical-align:middle;" >
                    @{{ alm.date }}
                </p>
            </div>

        </div>

    </div>
</div>
