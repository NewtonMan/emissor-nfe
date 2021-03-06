# Emissor para NF-e (Nota Fiscal Eletrônica)
Sistema para emissão de documentos fiscais baseado em PHP.

Este projeto tem como objetivo estabelecer uma ferramenta de emissão de documento fiscal colaborativa open-source, temos muitos desenvolvedores trabalhando em seus emissores quando poderiamos juntos colaborar nestas funcionalidades que temos em comum e ganharmos tempo para focar em outros aspectos de nossas aplicações e negócios, fazendo valer os ganhos do trabalho open-source.

***Não sabe codar? Ajude o desenvolvedor finaneiramente com qualquer quantia via PayPal para newtonpasqualini@gmail.com***

## Stack para Desenvolvimento
 - CakePHP 4
 - Bootstrap 4
 - VueJS
 - MySQL 5.8+
 - PHP 7.2+

# ROADMAP FASE 1
 - Schema da Base
 - Ambiente Plugin CakePHP 4
 - CRUDs:
    - Cadastro Geral (Empresas/Pessoas)
    - Produtos
    - ICMS
    - IPI
    - PIS
    - COFINS
    - II
    - NFe

# ROADMAP FASE 2
 - Emissão
 - Inutilização
 - Cancelamento

# ROADMAP FASE 3
 - Importação TXT
 - Importação XML
 - Exportação TXT

# SCHEMA 4.00 e responsáveis
## Veja abaixo as tags atendidas e não atendidas pelo projeto com seus respectivos responsáveis
- [x] ide = @NewtonMan
- [x] emit = @NewtonMan
- [x] dest = @NewtonMan
- [x] retirada = @NewtonMan
- [x] entrega = @NewtonMan
- [x] det = @NewtonMan
    - [x] prod = @NewtonMan
        - [ ] veicProd
        - [ ] med
        - [ ] arma
        - [ ] comb
        - [ ] nRECOPI
        - [ ] rastro
    - [x] imposto = @NewtonMan
        - [x] ICMS = @NewtonMan
            - [x] ICMSUFDest = @NewtonMan
        - [x] IPI = @NewtonMan
        - [x] PIS = @NewtonMan
        - [x] COFINS = @NewtonMan
        - [x] II = @NewtonMan
        - [ ] ISSQN
        - [ ] ICMSST
        - [ ] IPIST
        - [ ] PISST
        - [ ] COFINSST
- [x] total = @NewtonMan
- [x] impostos = @NewtonMan
    - [x] ICMSTot = @NewtonMan
    - [ ] ISSQNtot
    - [ ] retTrib
- [x] NFref = @NewtonMan
    - [x] refNFe = @NewtonMan
    - [x] refCTe = @NewtonMan
    - [ ] refNF
    - [ ] refNFP
    - [ ] refECF
- [x] transp = @NewtonMan
- [x] infAdFisco = @NewtonMan
- [x] infCpl = @NewtonMan
- [ ] cobr
- [ ] compra
- [ ] exporta
- [ ] cana
- [x] autXML = @NewtonMan
- [x] pag = @NewtonMan
