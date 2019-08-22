
    /**
     * @file NRE_BinaryInputFile.hpp
     * @brief Declaration of Engine's IO's Object : BinaryInputFile
     * @author Louis ABEL
     * @date 11/09/2018
     * @copyright CC-BY-NC-SA
     */

     #pragma once

    #include "../../Input/File/NRE_InputFile.hpp"
    #include "../Stream/NRE_BinaryInputStream.hpp"

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
             * @class BinaryInputFile
             * @brief Manage binary input file stream
             */
            class BinaryInputFile : public InputFile, public BinaryInputStream {
                public:    // Methods
                    //## Constructor ##//
                        /**
                         * Default Constructor
                         */
                        BinaryInputFile() = delete;
                        /**
                         * Construct an binary input file stream with a given file's path
                         * @p path the file's stream path
                         */
                        BinaryInputFile(File const& p);

                    //## Move-Constructor ##//
                        /**
                         * Move i into this
                         * @param i the binary input file to move
                         */
                        BinaryInputFile(BinaryInputFile && i) = default;

                    //## Deconstructor ##//
                        /**
                         * BinaryInputFile Deconstructor
                         */
                        ~BinaryInputFile() = default;

                    //## Methods ##//
                        /**
                         * @return the binary input file stream opening mode
                         */
                        std::ios_base::openmode getMode() const override;
                        /**
                         * @return the binary input file's stream
                         */
                        std::fstream& getStream() override;

                    //## Assignment Operator ##//
                        /**
                         * Move assignment of i into this
                         * @param i the binary input file to move
                         * @return  the reference of himself
                         */
                        BinaryInputFile& operator =(BinaryInputFile && i);
            };
        }
    }

    #include "NRE_BinaryInputFile.tpp"
