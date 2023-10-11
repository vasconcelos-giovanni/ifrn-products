<article class="col-12 d-flex flex-column justify-content-center align-items-center">
    <h1>Inscreva-se</h1>
    <form action="/sign-up" method="post" class="col-4 d-flex flex-column justify-content-center gap-2">
        <input class="form-control" type="text" placeholder="Nome" />
        <input class="form-control" type="text" placeholder="Nome de usuário" />
        <input class="form-control" type="email" placeholder="Nome" />
        <input class="form-control" type="password" placeholder="Senha" />
        <div class="d-flex gap-3">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Comum
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    Administrador
                </label>
            </div>        
        </div> 
        <div>
            <input type="submit" value="Entrar" class="btn btn-outline-primary" />
            <input type="submit" value="Entrar" class="btn btn-outline-danger" />
        </div>
    </form>
</article>