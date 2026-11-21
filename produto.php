<?php

class Produto {
    public string $nome;
    public float $preco;
    public int $quantidade;

    public function __construct(string $nome, float $preco, int $quantidade) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    public function adicionarEstoque(int $qtd): void {
        $this->quantidade += $qtd;
    }

    public function removerEstoque(int $qtd): bool {
        if ($qtd <= $this->quantidade) {
            $this->quantidade -= $qtd;
            return true;
        } else {
            return false;
        }
    }

    public function calcularValorTotal(): float {
        return $this->preco * $this->quantidade;
    }
}

$produto = new Produto("Mouse", 50.00, 10);
$produto->adicionarEstoque(5);

if ($produto->removerEstoque(3)) {
    echo "Itens removidos<br>";
} else {
    echo "Estoque insuficiente<br>";
}

echo "Produto: " . $produto->nome . "<br>";
echo "Preço: R$ " . $produto->preco . "<br>";
echo "Quantidade: " . $produto->quantidade . "<br>";
echo "Valor total: R$ " . $produto->calcularValorTotal();

?>
