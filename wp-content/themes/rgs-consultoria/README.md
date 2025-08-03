# Kont4You - Tema WordPress para Contabilidade Digital

## 📋 Índice
- [Descrição](#descrição)
- [Requisitos do Sistema](#requisitos-do-sistema)
- [Instalação Completa](#instalação-completa)
- [Configuração Inicial](#configuração-inicial)
- [Personalização](#personalização)
- [Funcionalidades](#funcionalidades)
- [Estrutura de Arquivos](#estrutura-de-arquivos)
- [Troubleshooting](#troubleshooting)
- [Suporte](#suporte)

## 📖 Descrição

O tema Kont4You é um tema WordPress moderno e responsivo desenvolvido especificamente para empresas de contabilidade digital. Baseado no design da [Kont4You](https://kont4you.com.br/), este tema oferece uma experiência de usuário excepcional com foco em conversão e profissionalismo.

### 🎯 Características Principais
- ✅ **Design Moderno**: Layout responsivo com tipografia Inter
- ✅ **Totalmente Responsivo**: Otimizado para todos os dispositivos
- ✅ **Performance Otimizada**: CSS otimizado e carregamento rápido
- ✅ **SEO Friendly**: Estrutura semântica e meta tags otimizadas
- ✅ **Custom Post Types**: Serviços e Depoimentos integrados
- ✅ **Formulário de Contato**: Funcional com envio de emails
- ✅ **Customizer**: Configurações fáceis de personalizar

## 🔧 Requisitos do Sistema

### Requisitos Mínimos
- **WordPress**: 5.0 ou superior
- **PHP**: 7.4 ou superior
- **MySQL**: 5.6 ou superior
- **Navegador**: Chrome, Firefox, Safari, Edge (versões recentes)

### Requisitos Recomendados
- **WordPress**: 6.0 ou superior
- **PHP**: 8.0 ou superior
- **MySQL**: 8.0 ou superior
- **Memória PHP**: 256MB ou superior

## 🚀 Instalação Completa

### Passo 1: Preparação do Ambiente

#### 1.1 Verificar WordPress
```bash
# Acesse o painel administrativo
# Vá em Ferramentas > Saúde do Site
# Verifique se não há problemas críticos
```

#### 1.2 Backup do Site (IMPORTANTE!)
```bash
# Faça backup completo do site antes da instalação
# - Banco de dados
# - Arquivos do WordPress
# - Tema atual (se houver)
```

### Passo 2: Upload do Tema

#### Opção A: Via Painel Administrativo (Recomendado)
1. **Acesse o WordPress Admin**
   ```
   https://seudominio.com/wp-admin
   ```

2. **Navegue até Temas**
   ```
   Aparência > Temas
   ```

3. **Adicione Novo Tema**
   ```
   Clique em "Adicionar novo" > "Enviar tema"
   ```

4. **Upload do Arquivo**
   ```
   Selecione o arquivo ZIP do tema Kont4You
   Clique em "Instalar agora"
   ```

#### Opção B: Via FTP/SFTP
1. **Conecte via FTP**
   ```bash
   Host: seu-servidor.com
   Usuário: seu-usuario
   Senha: sua-senha
   Porta: 21 (FTP) ou 22 (SFTP)
   ```

2. **Navegue até a pasta de temas**
   ```
   /public_html/wp-content/themes/
   ```

3. **Upload dos arquivos**
   ```
   Faça upload da pasta "rgs-consultoria" 
   para /wp-content/themes/
   ```

### Passo 3: Ativação do Tema

1. **Acesse o Painel Administrativo**
   ```
   Aparência > Temas
   ```

2. **Ative o Tema Kont4You**
   ```
   Clique em "Ativar" no tema Kont4You
   ```

3. **Verifique a Ativação**
   ```
   O tema deve aparecer como "Ativo"
   ```

## ⚙️ Configuração Inicial

### Passo 4: Configuração do Customizer

#### 4.1 Acessar o Customizer
```
Aparência > Personalizar
```

#### 4.2 Configurar Informações de Contato
1. **Seção "Informações de Contato"**
   ```
   Endereço: Av. Rio Branco, 125 - 19º andar - Centro, RJ
   Email: kontcomigo@kont4you.com.br
   Telefone: (21) 98306-0000
   ```

2. **Salvar Configurações**
   ```
   Clique em "Publicar" para salvar
   ```

#### 4.3 Configurar Logo (Opcional)
1. **Seção "Identidade do Site"**
   ```
   Clique em "Selecionar arquivo"
   Faça upload do logo da empresa
   Ajuste o tamanho se necessário
   ```

#### 4.4 Configurar Menus
1. **Seção "Menus"**
   ```
   Crie um novo menu chamado "Menu Principal"
   Adicione os itens:
   - Página Inicial
   - Sobre nós
   - Serviços
   - Blog
   - Contato
   ```

2. **Localização do Menu**
   ```
   Selecione "Menu Principal" na localização
   Salve o menu
   ```

### Passo 5: Configuração de Páginas

#### 5.1 Criar Página Inicial
1. **Páginas > Adicionar Nova**
   ```
   Título: Página Inicial
   Conteúdo: [deixe em branco]
   ```

2. **Configurar como Página Inicial**
   ```
   Configurações > Leitura
   Selecione "Uma página estática"
   Página inicial: Página Inicial
   ```

#### 5.2 Criar Páginas Principais
```
Páginas > Adicionar Nova

1. Sobre Nós
   - Título: Sobre Nós
   - Conteúdo: História da empresa

2. Serviços
   - Título: Nossos Serviços
   - Conteúdo: Lista de serviços

3. Blog
   - Título: Blog
   - Conteúdo: [deixe em branco]

4. Contato
   - Título: Contato
   - Conteúdo: [deixe em branco]
```

### Passo 6: Configuração de Posts

#### 6.1 Configurar Categorias
```
Posts > Categorias

1. Contabilidade Digital
2. Planejamento Tributário
3. Consultoria
4. Dicas Empresariais
```

#### 6.2 Criar Posts de Exemplo
```
Posts > Adicionar Novo

1. "Contabilidade para MEIs: Guia Completo 2024"
   - Categoria: Contabilidade Digital
   - Imagem destacada: [upload de imagem]

2. "Planejamento Tributário: Como Economizar Impostos"
   - Categoria: Planejamento Tributário
   - Imagem destacada: [upload de imagem]
```

## 🎨 Personalização

### Passo 7: Custom Post Types

#### 7.1 Configurar Serviços
```
Serviços > Adicionar Novo

1. Contabilidade Digital Automatizada
   - Descrição: Automatizamos as tarefas contábeis...
   - Imagem destacada: [upload de ícone]

2. Consultoria Contábil Personalizada
   - Descrição: Nossos especialistas estão prontos...
   - Imagem destacada: [upload de ícone]

3. Planejamento Tributário
   - Descrição: Maximize os benefícios fiscais...
   - Imagem destacada: [upload de ícone]

4. Relatórios Financeiros e KPI's
   - Descrição: Tenha acesso a relatórios detalhados...
   - Imagem destacada: [upload de ícone]

5. Regularização e Abertura de Empresas
   - Descrição: Suporte completo para abertura...
   - Imagem destacada: [upload de ícone]
```

#### 7.2 Configurar Depoimentos
```
Depoimentos > Adicionar Novo

1. "Excelente atendimento e profissionalismo"
   - Autor: João Silva
   - Cargo: CEO da TechStart
   - Imagem destacada: [foto do cliente]

2. "A Kont4You revolucionou nossa contabilidade"
   - Autor: Maria Santos
   - Cargo: Diretora Financeira
   - Imagem destacada: [foto do cliente]
```

### Passo 8: Personalização de Cores (Avançado)

#### 8.1 Editar CSS Personalizado
```
Aparência > Personalizar > CSS Adicional

/* Personalizar cores principais */
:root {
    --primary-color: #2563eb;
    --secondary-color: #fbbf24;
    --dark-color: #1f2937;
}

/* Personalizar botões */
.btn-primary {
    background-color: var(--primary-color);
}

.btn-secondary {
    border-color: var(--primary-color);
    color: var(--primary-color);
}
```

## 🔧 Funcionalidades

### Formulário de Contato
- ✅ **Funcional**: Envia emails automaticamente
- ✅ **Seguro**: Proteção com nonce
- ✅ **Responsivo**: Adaptado para mobile
- ✅ **Validação**: Campos obrigatórios

### Custom Post Types
- ✅ **Serviços**: Gerenciamento completo de serviços
- ✅ **Depoimentos**: Sistema de testimonials
- ✅ **Campos Personalizados**: Nome e cargo dos autores

### SEO e Performance
- ✅ **Meta Tags**: Otimizadas automaticamente
- ✅ **Schema Markup**: Estrutura semântica
- ✅ **Carregamento Rápido**: CSS otimizado
- ✅ **Mobile First**: Design responsivo

## 📁 Estrutura de Arquivos

```
rgs-consultoria/
├── style.css              # Estilos principais do tema
├── functions.php          # Funções e configurações
├── header.php             # Cabeçalho do site
├── footer.php             # Rodapé do site
├── front-page.php         # Página inicial personalizada
├── index.php              # Template padrão para listagem
├── page.php               # Template para páginas
├── single.php             # Template para posts individuais
├── assets/                # Arquivos estáticos
│   └── img/              # Imagens do tema
├── README.md             # Documentação completa
├── theme-config.json     # Configuração técnica
└── screenshot.txt        # Instruções para screenshot
```

## 🛠️ Troubleshooting

### Problemas Comuns e Soluções

#### 1. Tema não aparece na lista
```
Solução:
- Verifique se a pasta está em /wp-content/themes/
- Confirme se o style.css tem o cabeçalho correto
- Verifique permissões de arquivo (755 para pastas, 644 para arquivos)
```

#### 2. Formulário de contato não funciona
```
Solução:
- Verifique se o email do admin está configurado
- Teste com plugin de email como WP Mail SMTP
- Verifique logs de erro do servidor
```

#### 3. Imagens não carregam
```
Solução:
- Verifique se as imagens estão na pasta assets/img/
- Confirme permissões de arquivo
- Use imagens placeholder se necessário
```

#### 4. Menu não aparece
```
Solução:
- Crie o menu em Aparência > Menus
- Atribua a localização "Menu Principal"
- Verifique se há itens no menu
```

#### 5. Custom Post Types não aparecem
```
Solução:
- Vá em Configurações > Links Permanentes
- Clique em "Salvar Alterações"
- Limpe o cache se estiver usando plugin de cache
```

### Logs de Erro
```bash
# Verificar logs do WordPress
wp-content/debug.log

# Verificar logs do servidor
/var/log/apache2/error.log
/var/log/nginx/error.log
```

## 📞 Suporte

### Canais de Suporte
- **Email**: suporte@seudominio.com
- **WhatsApp**: (21) 98306-0000
- **Documentação**: Este README.md

### Informações Técnicas
- **Versão do Tema**: 1.0.0
- **Compatibilidade**: WordPress 5.0+
- **PHP**: 7.4+
- **Desenvolvedor**: Matheus

### Recursos Adicionais
- [Documentação WordPress](https://developer.wordpress.org/)
- [Codex WordPress](https://codex.wordpress.org/)
- [Fórum WordPress](https://wordpress.org/support/)

## 📄 Licença

Este tema foi desenvolvido especificamente para uso da Kont4You. Todos os direitos reservados.

---

**Última Atualização**: Dezembro 2024  
**Versão**: 1.0.0  
**Compatibilidade**: WordPress 5.0+ | PHP 7.4+ 