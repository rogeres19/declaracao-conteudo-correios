<?php
namespace Click4Web\DeclaracaoConteudo;

use Click4Web\DeclaracaoConteudo\Core\Controller;
use Click4Web\DeclaracaoConteudo\Interfaces\ItemBagInterface;
use Click4Web\DeclaracaoConteudo\Interfaces\PessoaInterface;

/**
 * Class DeclaracaoConteudo
 *
 * Declaração de Conteúdo para encomendas enviadas via Correios
 *
 * @package Click4Web\DeclaracaoConteudo
 * @author  fontebasso <sfdsilva@fontesoft.com>
 * @license http://www.opensource.org/licenses/mit-license.html MIT License
 */
class DeclaracaoConteudo extends Controller
{
    private $remetente;
    private $destinatario;
    private $itens;
    private $declaracoes;

    /**
     * DeclaracaoConteudo constructor.
     *
     * @param PessoaInterface  $remetente
     * @param PessoaInterface  $destinatario
     * @param ItemBagInterface $itens
     */
    public function __construct( array $declaracoes = []
    ) {
        /* 
        $this->remetente = $remetente;
        $this->destinatario = $destinatario;
        $this->itens = $itens; */
        $this->declaracoes = $declaracoes;
    }

    /* PessoaInterface $remetente,
        PessoaInterface $destinatario,
        ItemBagInterface $itens
 */
    /**
     * Imprimir Declaração de Conteúdo em HTML
     */
    public function imprimirHtml()
    {
        return $this->view(
            'declaracao-conteudo',
            [
            'declaracoes' => $this->declaracoes            
            ]
        );
    }
}
