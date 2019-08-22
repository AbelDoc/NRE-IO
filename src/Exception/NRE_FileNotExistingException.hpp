
    /**
     * @file NRE_FileNotExistingException.hpp
     * @brief Declaration of System's API's Object : FileNotExistingException
     * @author Louis ABEL
     * @date 19/08/2019
     * @copyright CC-BY-NC-SA
     */

    #pragma once

    #include "NRE_IOException.hpp"

    /**
     * @namespace NRE
     * @brief The NearlyRealEngine's global namespace
     */
    namespace NRE {
        /**
         * @namespace Exception
         * @brief Utility's API
         */
        namespace Exception {

            /**
             * @class FileNotExistingException
             * @brief An exception thrown when attempting an operation on a unexisting file
             */
            class FileNotExistingException : public IOException {
                public:
                    /**
                     * Construct the exception with a custom log
                     * @param log the exception's log
                     */
                    FileNotExistingException(Utility::String const& log) throw() : IOException("FileNotExisting Exception : " + log) {
                    }
            };
        }
    }
