use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\AdminController;

Route::get('/', [ProductController::class, 'index']); // Home Page
Route::get('/search', [ProductController::class, 'search']); // Search Page
Route::get('/product/{id}', [ProductController::class, 'show']); // Product Detail

Route::get('/cart', [CartController::class, 'index']); // Cart Page
Route::post('/cart/add', [CartController::class, 'add']); // Add to Cart

Route::get('/checkout', [CheckoutController::class, 'index']); // Checkout Page
Route::post('/checkout', [CheckoutController::class, 'process']); // Process Checkout

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index']); // Admin Dashboard
    Route::resource('/products', AdminController::class); // Admin Product Management
});
