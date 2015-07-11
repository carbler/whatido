<?php
/**
 * clase Hash
 *
 * Motor para cifrar mensajes (hash). Permite la transformación directa o incremental
 *d e mensajes de longitud arbitraria usando una variedad de algoritmos hash.
 *
 * @autor ricardo pedraza < jr091291@gmail.com >
*/

class Hash
{
    /**
     * funcion encargada de encriptar un string
     *
     * @internal             $hash       _ Contexto para cifrado que se obtiene mediante hash_init().
     * @internal             hash_init   _ Inicializa un contexto incremental para cifrar
     * @internal             HASH_HMAC   _ Indica que el algoritmo de cifrado de claves HMAC debe ser aplicado al contexto
     *                                     actual de hashing.
     * @internal             hash_update _ Pega más datos en un contexto incremental de cifrado activo
     * @internal             hash_final  _ Finaliza un contexto incremental y devuelve el resultado cifrado
     *
     * @param $algoritmo     Nombre del algoritmo de cifrado seleccionado (es decir "md5", "sha256", "haval160,4", etc..).
     * @param $dato          Mensaje que se pegará al valor del contexto para cifrar.
     * @param $key           Clave secreta compartida en este parámetro para ser utilizada en el método de cifrado HMAC.
     * @return string        Clave cifrada
     */
    public static function getHash($algoritmo , $dato, $key)
    {
        $hash = hash_init($algoritmo, HASH_HMAC, $key);
        hash_update($hash, $dato);
        
    return hash_final($hash);
    }
}
?>
