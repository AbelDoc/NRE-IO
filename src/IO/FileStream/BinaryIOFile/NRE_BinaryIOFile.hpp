
    /**
     * @file NRE_BinaryIOFile.hpp
     * @brief Declaratbinary ion of Engine's IO's Object : BinaryIOFile
     * @author Louis ABEL
     * @date 11/09/2018
     * @copyright CC-BY-NC-SA
     */

     #pragma once

    #include "../IOFile/NRE_IOFile.hpp"
    #include "../BinaryInput/Stream/NRE_BinaryInputStream.hpp"
    #include "../BinaryOutput/Stream/NRE_BinaryOutputStream.hpp"

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
             * @class BinaryIOFile
             * @brief Manage Binary Input-Output file stream
             */
            class BinaryIOFile : public IOFile, public BinaryInputStream, public BinaryOutputStream  {
                public:    // Methods
                    //## Constructor ##//
                        /**
                         * Default Constructor
                         */
                        BinaryIOFile() = delete;
                        /**
                         * Construct an BinaryIO file stream with a given file's path
                         * @param p the file's stream path
                         */
                        BinaryIOFile(File const& p);

                    //## Move-Constructor ##//
                        /**
                         * Move f into this
                         * @param f the binary io file to move
                         */
                        BinaryIOFile(BinaryIOFile && f) = default;

                    //## Deconstructor ##//
                        /**
                         * BinaryIOFile Deconstructor
                         */
                        ~BinaryIOFile() = default;

                    //## Getter ##//
                        /**
                         * @return the BinaryIO file stream opening mode
                         */
                        std::ios_base::openmode getMode() const override;
                        /**
                         * @return the BinaryIO file's stream
                         */
                        std::fstream& getStream() override;

                    //## Assignment Operator ##//
                        /**
                         * Move assignment of f into this
                         * @param f the binary io file to move
                         * @return  the reference of himself
                         */
                        BinaryIOFile& operator =(BinaryIOFile && f) = default;

            };
        }
    }

    #include "NRE_BinaryIOFile.tpp"
