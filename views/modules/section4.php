<div class="bg_img">
    <div class="container">
        <div class="row">
            <div class="col-12 text-white">
                <h1 style="text-align: center">Nuestros servicios</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-4" data-aos="flip-left" data-aos-duration="1000" id="services">
                    <div class="card">
                        <img src="views/img/paint2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Pintura</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit numquam voluptas asperiores, ab, laboriosam quam dolore iste perspiciatis ut iure maxime vitae nostrum eaque sint magnam unde molestias rem saepe?</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4" data-aos="flip-up" data-aos-duration="1000" id="services">
                    <div class="card">
                        <img src="views/img/drywall.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Drywall</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat asperiores iste sed consectetur a id, beatae, amet repellendus vitae nesciunt molestias consequatur aliquid atque excepturi velit ducimus nihil inventore placeat!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4" data-aos="flip-right" data-aos-duration="1000" id="services">
                    <div class="card">
                        <img src="views/img/sheetrock.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Sheetrock</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis repudiandae nihil odit dicta ducimus quod provident, eos quis fuga qui. Asperiores provident eius dolores totam architecto id veniam, hic consectetur!</p>
                        </div>
                    </div>
                </div>
                <div id="services-sm" class="col-lg-4 col-sm-12  shadow-sm p-3 mb-5 rounded" data-aos="flip-right" data-aos-duration="1000" style="margin-bottom: 0px !important;">
                    <h5 class="card-title text-white">Pintura</h5>
                    <p class="card-text text-white" style="padding: 10px; text-align: justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis repudiandae nihil odit dicta ducimus quod provident, eos quis fuga qui. Asperiores provident eius dolores totam architecto id veniam, hic consectetur!</p>
                </div>
                <div id="services-sm" class="col-lg-4 col-sm-12  shadow-sm p-3 mb-5 rounded" data-aos="flip-right" data-aos-duration="1000" style="margin-bottom: 0px !important;">
                    <h5 class="card-title text-white">Drywall</h5>
                    <p class="card-text text-white" style="padding: 10px; text-align: justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis repudiandae nihil odit dicta ducimus quod provident, eos quis fuga qui. Asperiores provident eius dolores totam architecto id veniam, hic consectetur!</p>
                </div>
                <div id="services-sm" class="col-lg-4 col-sm-12  shadow-sm p-3 mb-5 rounded" data-aos="flip-right" data-aos-duration="1000" style="margin-bottom: 0px !important;">
                    <h5 class="card-title text-white">Sheetrock</h5>
                    <p class="card-text text-white" style="padding: 10px; text-align: justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis repudiandae nihil odit dicta ducimus quod provident, eos quis fuga qui. Asperiores provident eius dolores totam architecto id veniam, hic consectetur!</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="background-color: #C2B171;">
    <div class="container">
        <div class="row" style="padding: 25px;">
            <div class="col-12">
                <h1 style="text-align: center">Cotiza con Nosotros</h1>
            </div>
            <div class="col-lg-4 col-md-12 offset-sm-12 offset-lg-4">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" id="name">
                            <div class="invalid-feedback">
                                Campo requerido
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Correo electrónico</label>
                            <input type="email" class="form-control" id="email" required>
                            <div class="invalid-feedback">
                                Campo requerido
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">Número telefónico</label>
                            <input type="number" class="form-control" id="phone" required>
                            <div class="invalid-feedback">
                                Campo requerido
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="service">Tipo de servicio</label>
                            <select id="service" class="form-control" required>
                                <option value="" selected>Seleccione</option>
                                <option value="Pintura">Pintura</option>
                                <option value="Drywall">Drywall</option>
                                <option value="Sheetrock">Sheetrock</option>
                            </select>
                            <div class="invalid-feedback">
                                Campo requerido
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="area">Área</label>
                            <input type="number" class="form-control" id="area" placeholder="Metros cuadrados" min="1" max="99999" required>
                            <div class="invalid-feedback">
                                Campo requerido
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="subject">Asunto</label>
                            <input type="text" class="form-control" id="subject" required>
                            <div class="invalid-feedback">
                                Campo requerido
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="message">Mensaje</label>
                            <textarea id="message" class="form-control" required></textarea>
                            <div class="invalid-feedback">
                                Campo requerido
                            </div>
                        </div>
                    </div>
                    <button id="dataForm" class="btn bg-dark text-white justify-content-center align-items-center">Enviar</button>
                    <p id="response"></p>
                </form>
            </div>
        </div>
    </div>
</div>