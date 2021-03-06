<?php


namespace Pongtan\FakeLaravel;


use Illuminate\Contracts\Foundation\Application as LaravelApp;

class Application implements LaravelApp, \ArrayAccess
{

    public function get($id)
    {
    }

    public function has($id)
    {
    }

    public function getCachedPackagesPath()
    {
    }

    public function runningInConsole()
    {
    }

    public function offsetExists($offset)
    {
    }

    public function offsetGet($offset)
    {
    }

    public function offsetSet($offset, $value)
    {
    }

    public function offsetUnset($offset)
    {
    }

    /**
     * Determine if the given abstract type has been bound.
     *
     * @param  string $abstract
     * @return bool
     */
    public function bound($abstract)
    {
    }

    /**
     * Alias a type to a different name.
     *
     * @param  string $abstract
     * @param  string $alias
     * @return void
     */
    public function alias($abstract, $alias)
    {
    }

    /**
     * Assign a set of tags to a given binding.
     *
     * @param  array|string $abstracts
     * @param  array|mixed ...$tags
     * @return void
     */
    public function tag($abstracts, $tags)
    {
    }

    /**
     * Resolve all of the bindings for a given tag.
     *
     * @param  array $tag
     * @return array
     */
    public function tagged($tag)
    {
    }

    /**
     * Register a binding with the container.
     *
     * @param  string|array $abstract
     * @param  \Closure|string|null $concrete
     * @param  bool $shared
     * @return void
     */
    public function bind($abstract, $concrete = null, $shared = false)
    {
    }

    /**
     * Register a binding if it hasn't already been registered.
     *
     * @param  string $abstract
     * @param  \Closure|string|null $concrete
     * @param  bool $shared
     * @return void
     */
    public function bindIf($abstract, $concrete = null, $shared = false)
    {
    }

    /**
     * Register a shared binding in the container.
     *
     * @param  string|array $abstract
     * @param  \Closure|string|null $concrete
     * @return void
     */
    public function singleton($abstract, $concrete = null)
    {
    }

    /**
     * "Extend" an abstract type in the container.
     *
     * @param  string $abstract
     * @param  \Closure $closure
     * @return void
     *
     * @throws \InvalidArgumentException
     */
    public function extend($abstract, \Closure $closure)
    {
    }

    /**
     * Register an existing instance as shared in the container.
     *
     * @param  string $abstract
     * @param  mixed $instance
     * @return void
     */
    public function instance($abstract, $instance)
    {
    }

    /**
     * Define a contextual binding.
     *
     * @param  string $concrete
     * @return \Illuminate\Contracts\Container\ContextualBindingBuilder
     */
    public function when($concrete)
    {
    }

    /**
     * Get a closure to resolve the given type from the container.
     *
     * @param  string $abstract
     * @return \Closure
     */
    public function factory($abstract)
    {
    }

    /**
     * Resolve the given type from the container.
     *
     * @param  string $abstract
     * @param  array $parameters
     * @return mixed
     */
    public function make($abstract, array $parameters = [])
    {

    }

    /**
     * Call the given Closure / class@method and inject its dependencies.
     *
     * @param  callable|string $callback
     * @param  array $parameters
     * @param  string|null $defaultMethod
     * @return mixed
     */
    public function call($callback, array $parameters = [], $defaultMethod = null)
    {
    }

    /**
     * Determine if the given abstract type has been resolved.
     *
     * @param  string $abstract
     * @return bool
     */
    public function resolved($abstract)
    {
    }

    /**
     * Register a new resolving callback.
     *
     * @param  string $abstract
     * @param  \Closure|null $callback
     * @return void
     */
    public function resolving($abstract, \Closure $callback = null)
    {
    }

    /**
     * Register a new after resolving callback.
     *
     * @param  string $abstract
     * @param  \Closure|null $callback
     * @return void
     */
    public function afterResolving($abstract, \Closure $callback = null)
    {
    }

    /**
     * Get the version number of the application.
     *
     * @return string
     */
    public function version()
    {
    }

    /**
     * Get the base path of the Laravel installation.
     *
     * @return string
     */
    public function basePath()
    {
    }

    /**
     * Get or check the current application environment.
     *
     * @return string
     */
    public function environment()
    {
    }

    /**
     * Determine if the application is currently down for maintenance.
     *
     * @return bool
     */
    public function isDownForMaintenance()
    {
    }

    /**
     * Register all of the configured providers.
     *
     * @return void
     */
    public function registerConfiguredProviders()
    {
    }

    /**
     * Register a service provider with the application.
     *
     * @param  \Illuminate\Support\ServiceProvider|string $provider
     * @param  array $options
     * @param  bool $force
     * @return \Illuminate\Support\ServiceProvider
     */
    public function register($provider, $options = [], $force = false)
    {
    }

    /**
     * Register a deferred provider and service.
     *
     * @param  string $provider
     * @param  string $service
     * @return void
     */
    public function registerDeferredProvider($provider, $service = null)
    {
    }

    /**
     * Boot the application's service providers.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register a new boot listener.
     *
     * @param  mixed $callback
     * @return void
     */
    public function booting($callback)
    {
    }

    /**
     * Register a new "booted" listener.
     *
     * @param  mixed $callback
     * @return void
     */
    public function booted($callback)
    {
    }

    /**
     * Get the path to the cached services.php file.
     *
     * @return string
     */
    public function getCachedServicesPath()
    {
    }

    /**
     * Determine if the application is running unit tests.
     *
     * @return bool
     */
    public function runningUnitTests()
    {
    }
}