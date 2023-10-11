<article class="col-12 d-flex flex-column justify-content-center align-items-center">
    <h1>Novo Tipo</h1>
    <form action="/create-type" method="post" class="col-4 d-flex flex-column justify-content-center gap-2">
        <div class="d-flex">
            <label class="col-3 fw-bold" for="nome">Nome</label>
            <input class="form-control" type="text" id="nome" name="nome" />
        </div>
        <div>
            <input type="submit" value="Salvar" class="btn btn-outline-primary" />
            <input type="submit" value="Cancelar" class="btn btn-outline-danger" />
        </div>
    </form>
</article>
