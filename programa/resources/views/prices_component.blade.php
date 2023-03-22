<tr class="">
    <td class="car-image">
        <div class="img" style="background-image:url({{ asset($car->image) }});"></div>
    </td>
    <td class="product-name">
        <h3>{{ $car->model }}</h3>
        <p class="mb-0 rated">
            <span>įvertintas:</span>
            <span class="ion-ios-star"></span>
            <span class="ion-ios-star"></span>
            <span class="ion-ios-star"></span>
            <span class="ion-ios-star"></span>
            <span class="ion-ios-star-half"></span>
        </p>
    </td>

    <td class="price">
        <p class="btn-custom"><a href="#">Nuomuoti</a></p>
        <div class="price-rate">
            <h3>
                <span class="num"><small class="currency">$</small> {{ number_format($car->price / 24, 2, ",", "") }}</span>
                <span class="per">/už valandą</span>
            </h3>
            <span class="subheading">$3/valandiniai degalų mokesčiai</span>
        </div>
    </td>

    <td class="price">
        <p class="btn-custom"><a href="#">Nuomuoti</a></p>
        <div class="price-rate">
            <h3>
                <span class="num"><small class="currency">$</small> {{$car->price}}</span>
                <span class="per">/už dieną</span>
            </h3>
            <span class="subheading">$3/valandiniai degalų mokesčiai</span>
        </div>
    </td>

    <td class="price">
        <p class="btn-custom"><a href="#">Nuomuoti</a></p>
        <div class="price-rate">
            <h3>
                <span class="num"><small class="currency">$</small> {{ number_format($car->price * 30, 2, ",", "") }}</span>
                <span class="per">/už mėnesį</span>
            </h3>
            <span class="subheading">$3/valandiniai degalų mokesčiai</span>
        </div>
    </td>
</tr><!-- END TR-->