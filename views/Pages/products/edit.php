<article class="col-12 d-flex flex-column justify-content-center align-items-center">
    <h1>Editar Produto</h1>
    <form action="/sign-up" method="post" class="col-4 d-flex flex-column justify-content-center gap-2">
        <div class="d-flex">
            <label class="col-3 fw-bold" for="nome">Nome</label>
            <input class="form-control" type="text" id="nome" value="Sample Product Name"/>
        </div>
        <div class="d-flex">
            <label class="col-3 fw-bold" for="descricao">Descrição</label>
            <input class="form-control" type="text" id="descricao" value="Sample Product Description" />
        </div>
        <div class="d-flex">
            <label class="col-3 fw-bold" for="preco">Preço (R$)</label>
            <input class="form-control" type="number" id="preco" value="25.99" />
        </div>
        <div class="d-flex">
            <label class="col-3 fw-bold" for="tipo">Tipo</label>
            <select class="form-select" id="tipo" aria-label="Default select example">
                <option selected>Tipo</option>
            </select>
        </div>
        <div>
            <input type="submit" value="Salvar" class="btn btn-outline-primary" />
            <input type="submit" value="Cancelar" class="btn btn-outline-danger" />
        </div>
    </form>
</article>
