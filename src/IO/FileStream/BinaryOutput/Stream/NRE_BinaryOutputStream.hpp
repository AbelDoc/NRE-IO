
    /**
     * @file NRE_BinaryOutputStream.hpp
     * @brief Declaration of Engine's IO's Object : BinaryOutputStream
     * @author Louis ABEL
     * @date 11/09/2018
     * @copyright CC-BY-NC-SA
     */

     #pragma once

    #include <fstream>

     /**
     * @namespace NRE
     * @brief The NearlyRealEngine's global namespace
     */
    namespace NRE {
        /**
         * @namespace IO
         * @brief IO's API
         */
        namespace IO {

            /**
             * @pure BinaryOutputStream
             * @brief Base interface for binary output related stream
             */
            class BinaryOutputStream {
                public:    // Methods
                    //## Constructor ##//
                        /**
                         * Default constructor
                         */
                        BinaryOutputStream() = default;

                    //## Copy-Constructor ##//
                        /**
                         * Copy forbidden
                         * @param o the binary output stream to copy
                         */
                        BinaryOutputStream(BinaryOutputStream const& o) = delete;

                    //## Move-Constructor ##//
                        /**
                         * Move o into this
                         * @param o the binary output stream to move
                         */
                        BinaryOutputStream(BinaryOutputStream && o) = default;

                    //## Deconstructor ##//
                        /**
                         * BinaryOutputStream Deconstructor
                         */
                        virtual ~BinaryOutputStream() = default;

                    //## Getter ##//
                        /**
                         * @return the file's stream
                         */
                        virtual std::fstream& getStream() = 0;

                    //## Methods ##//
                        /**
                         * Write a given number of bytes from the passed data into the file stream
                         * @param object        the data to write some bytes
                         * @param sizeInBytes   the number of bytes to write
                         */
                        template <class T>
                        void writeBinary(T const& object, std::size_t sizeInBytes) {
                            getStream().write(reinterpret_cast<const char*>(&object), sizeInBytes);
                        }

                    //## Assignment Operator ##//
                        /**
                         * Copy assignment forbidden
                         * @param o the binary output stream to copy
                         * @return  the reference of himself
                         */
                        BinaryOutputStream& operator =(BinaryOutputStream const& o) = delete;
                        /**
                         * Move assignment of i into this
                         * @param o the binary output stream to move
                         * @return  the reference of himself
                         */
                        BinaryOutputStream& operator =(BinaryOutputStream && o) = default;
            };
        }
    }
