require'nvim-treesitter.configs'.setup {
    ensure_installed = O.treesitter.ensure_installed, -- one of "all", "maintained" (parsers with maintainers), or a list of languages
    ignore_install = O.treesitter.ignore_install,
    matchup = {
        enable = true,              -- mandatory, false will disable the whole extension
        -- disable = { "c", "ruby" },  -- optional, list of language that will be disabled
    },
    highlight = {
        enable = O.treesitter.highlight.enabled 
    },
    context_commentstring = {
        enable = true,
        config = {
          css = '// %s'
        }
      },
    -- TODO seems to be broken
    indent = {enable = true},
    autotag = {enable = true},
}
