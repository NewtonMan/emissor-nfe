# Emissor para NF-e (Nota Fiscal Eletrônica)
Sistema para emissão de documentos fiscais baseado em Laravel/PHP.

Este projeto tem como objetivo estabelecer uma ferramenta de emissão de documento fiscal colaborativa open-source, temos muitos desenvolvedores trabalhando em seus emissores quando poderiamos juntos colaborar nestas funcionalidades que temos em comum e ganharmos tempo para focar em outros aspectos de nossas aplicações e negócios, fazendo valer os ganhos do trabalho open-source.

# ROADMAP FASE 1
 - Schema da Base
 - Ambiente Módulo Laravel
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
    - [x] enderEmit = @NewtonMan
- [x] dest = @NewtonMan
    - [x] enderDest = @NewtonMan
- [x] retirada = @NewtonMan
- [x] entrega = @NewtonMan
- [x] det = @NewtonMan
    - [x] prod = @NewtonMan
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
    - [x] tPag = @NewtonMan
    - [x] detPag = @NewtonMan
    - [x] card = @NewtonMan
