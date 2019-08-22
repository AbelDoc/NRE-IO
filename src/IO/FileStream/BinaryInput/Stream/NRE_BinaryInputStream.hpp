
    /**
     * @file NRE_BinaryInputStream.hpp
     * @brief Declaration of Engine's IO's Object : BinaryInputStream
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
             * @pure BinaryInputStream
             * @brief Base interface for binary input related stream
             */
            class BinaryInputStream {
                public:    // Methods
                    //## Constructor ##//
                        /**
                         * Default constructor
                         */
                        BinaryInputStream() = default;

                    //## Copy-Constructor ##//
                        /**
                         * Copy forbidden
                         * @param i the binary input stream to copy
                         */
                        BinaryInputStream(BinaryInputStream const& i) = delete;

                    //## Move-Constructor ##//
                        /**
                         * Move i into this
                         * @param i the binary input stream to move
                         */
                        BinaryInputStream(BinaryInputStream && i) = default;

                    //## Deconstructor ##//
                        /**
                         * BinaryInputStream Deconstructor
                         */
                        virtual ~BinaryInputStream() = default;

                    //## Getter ##//
                        /**
                         * @return the file's stream
                         */
                        virtual std::fstream& getStream() = 0;

                    //## Methods ##//
                        /**
                         * Read a given number of bytes into the passed data from the file stream
                         * @param object        the data to store the read return
                         * @param sizeInBytes   the number of bytes to read
                         */
                        template <class T>
                        void readBinary(T& object, size_t sizeInBytes) {
                            getStream().read(reinterpret_cast<char *>(&object), sizeInBytes);
                        }

                    //## Assignment Operator ##//
                        /**
                         * Copy assignment forbidden
                         * @param i the binary input stream to copy
                         * @return  the reference of himself
                         */
                        BinaryInputStream& operator =(BinaryInputStream const& i) = delete;
                        /**
                         * Move assignment of i into this
                         * @param i the binary input stream to move
                         * @return      the reference of himself
                         */
                        BinaryInputStream& operator =(BinaryInputStream && i) = default;
            };
        }
    }
