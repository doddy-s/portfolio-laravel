import globals from 'globals'
import tseslint from 'typescript-eslint'
import pluginReact from 'eslint-plugin-react'


export default [
  {files: ['**/*.{js,mjs,cjs,ts,jsx,tsx}']},
  {languageOptions: { globals: globals.browser }},
  ...tseslint.configs.recommended,
  pluginReact.configs.flat.recommended,
  {
    rules: {
      'react/jsx-uses-react': 'off',
      'react/react-in-jsx-scope': 'off',
      'semi': ['warn', 'never'],
      'quotes': ['warn', 'single'],
      'no-console': 'warn',
      'jsx-quotes': [2, 'prefer-double'],
      'indent': ['warn', 2],
    }
  }
]