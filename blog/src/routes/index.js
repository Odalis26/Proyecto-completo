import{Router} from 'express'
const router = Router()


router.get('/', (req,res)=> res.render('index', { title: 'Salud & Belleza'}))

router.get('/about', (req,res)=> res.render('about', { title: 'About me'}))

router.get('/contact', (req,res)=> res.render('contact', { title: 'Contact me'}))

router.get('/mesagge', (req,res)=> res.render('mesagge', { title: 'mesagge'}))

router.get('/categorias', (req,res)=> res.render('categorias', { title: 'categorias'}))

router.get('/paleta', (req,res)=> res.render('paleta', { title: 'paleta'}))

router.get('/esmalte', (req,res)=> res.render('esmalte', { title: 'esmalte'}))

router.get('/sombras', (req,res)=> res.render('sombras', { title: 'sombras'}))

router.get('/unias', (req,res)=> res.render('unias', { title: 'unias'}))

router.get('/maquillaje', (req,res)=> res.render('maquillaje', { title: 'maquillaje'}))

router.get('/cara', (req,res)=> res.render('cara', { title: 'cara'}))

router.get('/polvo', (req,res)=> res.render('polvo', { title: 'polvo'}))

router.get('/mascarilla', (req,res)=> res.render('mascarilla', { title: 'mascarilla'}))

router.get('/corrector', (req,res)=> res.render('corrector', { title: 'corrector'}))
export default router
